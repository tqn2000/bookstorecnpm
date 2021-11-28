<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showFormregister()
    {
        return view('lognin.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->route('show-form-register')->with('success','Dang ky thanh cong');
    }
}
