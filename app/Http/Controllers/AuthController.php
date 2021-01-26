<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis()
    {
        return view ('tugas_laravel_1/register');
    }

    public function welcome(request $request)
    {
        $namadepan=$request->nama_depan;
        $namabelakang=$request->nama_belakang;
        return view('tugas_laravel_1/welcome', compact("namadepan","namabelakang"));
    }
    
}
