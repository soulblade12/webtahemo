<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'username' =>'required|min:3|max:255|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255',
            'confirm-password'=>'required_with:password|same:password|min:5'
        ]);
       // $validated_data['password'] = bcrypt($validated_data['password']);
        $validated_data['password'] = Hash::make($validated_data['password']);
        $validated_data['confirm-password'] = Hash::make($validated_data['confirm-password']);
        User::create($validated_data);

        $request->session()->flash('success', 'Task was successful!');

        return redirect('/Login');
    }
}
