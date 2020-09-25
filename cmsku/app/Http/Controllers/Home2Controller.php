<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class Home2Controller extends Controller
{
    public function __invoke()
    {
        Cache::remember('article', 15,function(){
            return Article::all();
        });
        $article = Cache::get('article');
        $article = json_decode(json_encode($article));
        return view('home.homeindex')->with(compact('article'));
    }
}