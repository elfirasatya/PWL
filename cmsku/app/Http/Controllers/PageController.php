<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return ('Selamat Datang');
    }
    
    public function about(){
        return 'Muhammad Fauzan Tri Aji <br> NIM : 1931710150';
    }
    
    public function articles($id){
        return "Halaman artikel dengan id ".$id;
    }
}
