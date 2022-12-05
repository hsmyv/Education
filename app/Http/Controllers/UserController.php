<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function createlogin()
    {

        return view('authentication.login');
    }
    public function createregister()
    {
        return view('authentication.register');
    }

    public function createforgetpassword()
    {
        return view('authentication.forget-password');
    }

    public function register(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        Auth()->login($user);

        return redirect('/');
    }

    public function login(Request $request)
    {

        $attributes = $request->validate([
            'name' => 'required|min:3',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in!');
        }


        throw ValidationException::withMessages([
            'email'     => 'Invalid Credentials'
        ]);
    }

    public function logout(Request $request)
    {

        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

         return redirect()->route('home')->with('success', 'You have been logout');
    }
}
