<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $register = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);
        if($register){
        return redirect()->route('login')->with('success', 'User created successfully');
        }
        return redirect()->back()->with('errors','Failed to signup')->onlyInput([ $request->name,$request->email]);

    }

}
