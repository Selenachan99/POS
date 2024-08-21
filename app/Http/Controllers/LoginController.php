<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required|min:8',
        ]);
        $credential = $request->only(['email','password']);
        if(Auth::attempt($credential)){
            return redirect()->intended('dashboard');
        }

return redirect()->back()->withErrors('login gagal. Mohon periksa kembali email dan password anda');

    }
}
