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
    return view('course');
})->name("welcome");

//Route::get('/page', function () {
//    $data=[
//        "ad"=>"emre",
//        "soyad"=>"canga"
//    ];
////    return view('page')->with($data);
////    return view('page')->with(["ad"=>"deneme","soyad"=>"soyad"]);
////    return view('page')->with("ad","emrah")->with("soyad","yuksel");
//    return view('page',compact("data"));
//
//})->name("page");

Route::group(['namespace' => '\App\Http\Controllers'], function () {

    Route::get('/page', 'Page1Controller@index');
   // Route::get('/page', 'Page1Controller@show');
});
//
//Route::get('/backend', function () {
//    return view('Backend.default.index');
//})->name("backend");
//
//Route::get('/frontend', function () {
//    return view('frontend.index');
//})->name("frontend");


