<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.register');
    }

    public function register(Request $request)
    {
        $validasi = $request->validate([
            'fullName' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'phoneNumber' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required',
        ]);

        $validasi['password'] = bcrypt($validasi['password']);
        $validasi['confirmPassword'] = bcrypt($validasi['confirmPassword']);

        User::create($validasi);
        return redirect('/login')->with('success', 'Account has been created successfully!');
    }
}
