<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function showLoginAction()
    {
        if (!Auth::check()) {
            return view('admin.login.login');
        } else {
            return redirect('administration');
        }
    }

    public function loginAction(LoginRequest $request)
    {
        $params = array(
            'username' => $request->username,
            'password' => $request->password,
            'level'    => ADMIN_LEVEL,
        );
        if (Auth::attempt($params)) {
            return redirect('administration');
        } else {
            return redirect()->back();
        }
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect()->route('administration/login');
    }
}
