<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm (){
        return view("register");
    }
    public function register(Request $request) {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|confirmed|min:5|max:30',
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        Auth::login($user);
        session()->flash('success-msg','you have registered');
        return redirect(url('/profile'));
    }

    public function loginForm() {
        return view("login");
    }
    public function login(Request $request)  {

        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:30'
        ]);
        $isLogin = Auth::attempt(["email"=>$request->email,"password"=>$request->password]);
        if(!$isLogin) {
            session()->flash('error-msg','Invalid email or password');
            return back();
        }
        session()->flash('success-msg','you have logged in successfully');
        return redirect(url('/profile'));
    }

    public function logout() {
        Auth::logout();
        return redirect(url('/login'));
    }
}
