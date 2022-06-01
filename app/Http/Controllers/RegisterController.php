<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validdateDate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validdateDate['password'] = bcrypt($validdateDate['password']);

        $validdateDate['password'] = Hash::make($validdateDate['password']);
        
        User::create($validdateDate);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
        
    }

}
