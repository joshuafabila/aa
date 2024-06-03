<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    //controller for login page
    public function login(Request $request){
        $credentials = $request->only(['username','password']);

        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }
}