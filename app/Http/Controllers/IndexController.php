<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index(){
        return view('index.login');
    }

    public function login(){

        if (isset($_POST['remember'])){
            $remember = true;
        } else {
            $remember = false;
        }

        if (! auth()->attempt(request(['email', 'password']), $remember)){
            return redirect('/')->with(['error' => 'Check e-mail and password and try again']);
        }

        return redirect('/home');

    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
