<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request,[

            'name'=>'required| max: 255',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',

        ]);

        User::create([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
                //authenticate

        auth()->attempt($request->only('email', 'password'));

        return redirect('/');

    }
}
