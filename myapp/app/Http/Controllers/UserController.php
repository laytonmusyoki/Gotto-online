<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('all')->with('error','You are logged in');
        }
        return view('Accounts.login');
    }

    public function register(){
        if(Auth::check()){
            return redirect('all')->with('error','You are logged in');
        }
        return view('Accounts.register');
    }
    public function registerpost(Request $request){
        $request->validate([
            'username'=>'required | unique:users',
            'email'=>'required | unique:users',
            'password'=>'required |confirmed',
        ]);

        $data['username']=$request->username;
        $data['email']=$request->email;
        $data['password']=$request->password;

        if($data){
            User::create($data);
            return redirect('/')->with('success','Account created successfully');
        }
        else{
            return redirect('register');
        }
        
    }

    public function loginpost(Request $request){
        $credentials=$request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect('products')->with('success','You are know logged in');
        }
        return redirect('/')->with('error','Wrong credentials');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/')->with('error','You have been logged out');
    }
}
