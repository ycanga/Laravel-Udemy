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

Route::get("/message",function (){
    return response()->HomeMessage("Burasi mesaj sayfasidir.");//app/Providers/AppServiceProvider.php içerisinde tanımladığımız macro fonksiyonu ekrana mesaj bastırır.
});

Route::get("/url",function(){
    // return url()->full(); //tam url adresini döndürür.
    // return url()->previous(); //önceki ziyaret edilen url adresini döndürür.
    // return redirect(url()->previous()); //önceki ziyaret edilen url adresine yönlendirir.
});

Route::get("/file",function (){
    // return redirect("/download/file.txt"); //dosyayı içeriğini tarayıcıda gösterir.
    return response()->download("download/file.txt"); //dosyayı indirir.
});

Route::get("course", "\App\Http\Controllers\CourseController@index")->name("courseGet");
Route::post("courseInsert", "\App\Http\Controllers\CourseController@course_insert")->name("courseInsert");

