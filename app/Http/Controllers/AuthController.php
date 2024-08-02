<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('admin.index');
    }
    public function login(LoginUserRequest $request)
    {
        $dataLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = $request->has('remember');
        // dd($dataLogin);
        if (Auth::attempt($dataLogin,$remember)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.products.listProduct')->with([
                    'sucsses' => 'Đăng nhập thành công'
                ]);
            }else {
                return redirect()->route('admin.getLogin')->with('error', 'You are not admin');
            }                
        } else {
            return back()->with([
                'message' => 'Email or Password incorrect',
            ])->onlyInput('email');
            
        }
    }
    public function logout()
    {
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('admin.getLogin')->with([
            'logout' => 'Đăng xuất thành công'
        ]);
    }
    public function getSignup()
    {
        return view('admin.pages.Signup');
    }
    



}