<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function form()
    {
        return view ('tugas_laravel_1/home');
    }
    
}
