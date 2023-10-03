<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    
    public function index()
    {
        return view('auth.login_employer');
    }
    public function signup_employer()
    {
        return view('auth.signup_employer');
    }
    public function postSignup_employer(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:7',
        ]);
        $data = $request->all();
        $createUser = $this->create($data);
        return redirect('login_employer')->withSuccess('You are registered successfully');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }
    public function postLogin_employer(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $checkLoginCredentials = $request->only('email','password');
        if(Auth::attempt($checkLoginCredentials)){
            return redirect('page_employer')->withSuccess('You are successfully loggin');
        }
        return redirect('page_employer')->withSuccess('You login credentials are incorrect');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login_employer');
    }
    public function page_employer()
    {
        if(Auth::check()){
            return view('page_employer');
        }
        return redirect('login_employer')->withSuccess('Wrong Email or Password.');
    }
}
