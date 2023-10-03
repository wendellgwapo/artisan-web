<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=> 2
        ]);
        if($validated){
            return redirect()->route('adminHome')->with('success', 'Login Successfull');
        }else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function adminHome()
    {
        $data=[
            'title'=>'Dashboard'
        ];
        return view('admin.home',$data);
    }
    public function alogout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','Successfuly logged out');
    }
}
