<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.pages.login.index');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect()->intended(route('dashboard'))->with('info','Welcome');

        }
        else{

            return redirect()->intended(route('login'));

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
