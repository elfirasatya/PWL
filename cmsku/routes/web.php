<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/about', 'PageController@about');

Route::get('/', function () {
    return view('Welcome');
});

//Route::get('/hello', function () {
//    return view ('hello', ['name' => 'Andi']);
//});

//Route::get('/', function () {
//    return ('Selamat Datang');
//});

//Route::get('/about', function(){
//   return "Elfira Satya Pramesti <br> NIM : 1931710014";
//});

//Route::get('/articles/{id}',function($id){
//    return "Halaman artikel dengan id ".$id;
//});

Route::get('/home', 'HomeController@welcome');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{id}', 'ArticlesController@articles');
Route::get('/hello','WelcomeController@hello');
Route::get('/app','AppController@app');
Route::get('/home0', 'Home3Controller@home');
Route::get('/prak2', 'MasterController@master');
Route::get('/__invoke', 'Home2Controller@__invoke');

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
