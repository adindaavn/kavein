<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email required',
            'password.required' => 'Password required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->withErrors('Email or password invalid');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Name required',
            'email.required' => 'Email required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is unavailable',
            'password.required' => 'Password required',
            'password.min' => 'Password minimum characters is 6',
        ]);

        $regist = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($regist);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->withErrors('Email or password invalid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'You logged out');
    }
}
