<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //home
    public function index()
    {
        $listProducts = Product::paginate(8);
        return view('pages.home')->with([
            'listProducts' => $listProducts,
        ]);
        
    }
    //Đăng nhập, ký, thoát
    public function getSignup()
    {
        return view('pages.login');
    }
    public function Signup(StoreUserRequest $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('client.getLogin')->with('success', 'Account created successfully');
    }
    public function getLogin()
    {
        return view('pages.login');
    }
    public function Login(LoginUserRequest $request)
    {
        $dataLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = $request->has('remember');
        if (Auth::attempt($dataLogin, $remember)) {
            if (Auth::user()->role == 'client' && Auth::user()->role == 'admin') {

                return redirect()->route('client.index')->with([
                    'sucsses' => 'Đăng nhập thành công'
                ]);
            } else {
                return redirect()->route('client.index');
            }

        } else {
            return back()->with([
                'message' => 'Email or Password incorrect',
            ])->onlyInput('email');
            // return redirect()->route('admin.getLogin')->with([
            //     'message' => 'Email or Password incorrect'
            // ]);
        }

    }
    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken(); // sẽ tạo ra một token CSRF mới cho phiên làm việc mới.
        $request->session()->invalidate();//Vô hiệu hóa phiên làm việc hiện tại
        return redirect()->route('client.index')->with([
            'Logout' => 'Đăng xuất thành công'
        ]);
    }
    //chi tiết sản phẩm
    
}