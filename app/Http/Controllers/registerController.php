<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('/register');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:akuns',
            'password' => 'required|min:6|max:255'
        ]);

        // dd('regis berhasil');

        // return $request->all();

        $validatedData['password'] = Hash::make($validatedData['password']);

        Akun::create($validatedData);

        return redirect('/login')->with('success', 'Registration Succesfull! Please Login ');
    }
}
