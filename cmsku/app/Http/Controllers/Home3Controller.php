<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home3Controller extends Controller
{
    public function home(){
        return view ('welcome');
    }
}