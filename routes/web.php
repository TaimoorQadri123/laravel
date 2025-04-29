<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('index',funtion(){
//     return view('index');
// });
Route::get('home', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('std',[MyController::class,'selectStudents']);