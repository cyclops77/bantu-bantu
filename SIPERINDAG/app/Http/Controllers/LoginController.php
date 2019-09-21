<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logon(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return 'Password Salah';
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
