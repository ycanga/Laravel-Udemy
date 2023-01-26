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
   // return redirect(\route("courseGet"));//sayfaya yönlendirme yapar.
   // return view('course',["ad"=>"emrah"]);
    return response()->json([
        "course_title"=> "php",
        "course_content"=> "php içerik",
        "course_must"=> "100"
    ]);
});

Route::get("course", "\App\Http\Controllers\CourseController@index")->name("courseGet");
Route::post("courseInsert", "\App\Http\Controllers\CourseController@course_insert")->name("courseInsert");

