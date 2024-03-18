<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required'        
        
        ],[
            'email.exists'=>'this email is not exists on users table'
        ]);

        $creds=$request->only('email','password');
        if (Auth::guard('admin')->attempt($creds)){
            return  redirect()->route('admin.home');
        }
        else {
             return redirect()->route('admin.login')->with('fail', 'incorrect credentials');
        }
    }

    function logout()
    { Auth::guard('admin')->logout();
      return redirect("/");
}


  
}
