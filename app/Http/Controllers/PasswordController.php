<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index(){
        return view('password.change');
    }

    public function change(Request $request){
        $this->validate($request, [
           'password' => 'required|min:6|confirmed'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/home')->with(['success' => 'You have successfully changed password.']);
    }
}
