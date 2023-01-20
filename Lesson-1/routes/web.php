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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

//Route::get('/newpage/{emre?}/{canga?}', function ($ad=null,$soyad=null) {
//    return $ad." ".$soyad;
//    //return view('newpage');
//});

Route::get('/post', function () {
    return view('newpage');
})->name("homepage");

Route::get('/newpage/{ad}/{soyad}', function ($ad,$soyad) {
    return $ad." ".$soyad;
//})->where('ad','[0-9]+');
})->where(['ad'=>'[a-z]+', 'soyad'=>'[azA-z]+'])->name("newPageParam");
