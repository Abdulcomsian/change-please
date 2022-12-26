<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AnalystController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('analyst')->attempt(['email' => $request->email , 'password' => $request->password ], $request->get('remember')))
        {
            return redirect()->route('analyst.dashboard');
        }else{
            session()->flash('error','Either Email/Password Incorrect');
            return back()->withInput($request->only('email'));
        }
    }

    public function login()
    {
        return view('analyst_auth.login');
    }

    public function logout()
    {
        Auth::guard('analyst')->logout();
        return redirect()->route('analyst.login');
    }

    public function get_analyst()
    {
        return view('admin.analyst');
    }

}
