<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function listUser()
    {
        $listUsers = User::where('role', '!=', 'admin')->paginate(7);
        return view('admin.User.list-user')->with([
            'listUsers' => $listUsers,
        ]);
    }
    public function addUser()
    {
        return view('admin.User.add-user');
    }
    public function postUser(StoreUserRequest $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|unique:users',
        //     'password' => 'required|min:3|confirmed',
        //     'role' => 'required|in:admin,client',
        // ],[
            
        // ]);
        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];

        User::create($data);
        return redirect()->route('admin.users.listUser')
            ->with(['message' => 'Thêm mới thành công']);
    }
    // //
    public function editUser(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.User.edit-user',compact('user'));
    }
    public function updateUser(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),           
            'role' => $request->role,
        ];
  
        $user->update($data);
        return redirect()->route('admin.users.listUser')
        ->with('message', 'User Updated Successfully');
        
    }
    
    public function deleteUser(string $userid)
    {
        $user = User::findOrFail($userid);         
        $user->delete();      
        return redirect()->route('admin.users.listUser')
            ->with(['message' => 'Delete Successfully']);

    }

}