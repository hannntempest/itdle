<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin_page');
        }else{
            return view('login_admin');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('admin_page');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
