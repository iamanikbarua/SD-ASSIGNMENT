<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginstore(Request $r){
        $email = $r->email;
        $password = $r->password;

        $user = User :: where('email', '=', $email)
               ->where('password', '=', $password)
               ->first();

        if(!$user){
            return redirect()->back()->with('err_msg','Invalid email or password');
        
        }
        else{
            $r->session()->put('username', $user->name);
            $r->session()->put('useremail', $user->email);
            $r->session()->put('userrole', $user->role);
            return redirect()->to('/dashboard');
        }
      
    }
    public function dashboard(){
        return view('dashboard');
            
    }
    public function student(){
        return view('student');
    }

    public function teacher(){
        return view('teacher');
    }
}
