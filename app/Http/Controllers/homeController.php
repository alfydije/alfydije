<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Akun;

class homeController extends Controller
{
    public function index()
    {
        $role Auth::akuns()->role;

        if($role=='1')
        {
            return view('admin')
        }
        if($role=='2')
        {
            return view('seller')
        }
        else
        {
            return view('dashboard')
        }
    }
    public function addseller(Request $request)
    {
        $data= new akuns;

        $data->nama $request->nama;
        $data->email $request->email;
        $data->password bcr $request->password;

        $data->role='2';
        $data->save();

        return redirect()->back();



    }
}
