<?php

use Illuminate\Support\Facades\Route;

Route::get('page1', "\App\Http\Controllers\Page1Controller@index");

// Route::get("course", "\App\Http\Controllers\CourseController@index")->name("courseGet");
// Route::post("courseInsert", "\App\Http\Controllers\CourseController@course_insert")->name("courseInsert");

