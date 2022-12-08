<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Akun;
use Session;

class loginController extends Controller
{
public function index()
    {
        return view ('autentikasi.login');
    }
public function authenticate (Request $request)
{
    // if(Auth::Akun()->role =='1') //admin
    // {
    //     return redirect('/admin/dashboard');
    // }
    // else if(Auth::Akun()->role == '0') //user
    // {
    //     return redirect('/index');
    // }
    // else
    // {
    // return redirect ('/login');
    // }
    // dd ('beehasil');
    // return $request->all();
    // $credentials = $request->validate([
        // 'email' => 'required|email:dns',
        // 'password' => 'required'
    // ]);
$data = Akun::where('email',$request->email)->firstorFail();
if($data){
        if(Hash::Check($request->password,$data->password)){
        return redirect('/index');
        }
return redirect('login')->with('message','Email atau password salah');

if(Auth::attempt($credentials)) {
$request->session()->regenerate();
return redirect()->intended('dashboard');

}

return back()->with('loginError','Login failed!');
}

//     }   
}
}