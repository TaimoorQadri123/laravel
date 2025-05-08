<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MyController;

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

Route::get('insert', function () {
    return view('insert');
});
Route::post('insert',[MyController::class,'insertData']);

Route::get('select',[MyController::class,'selectData']);
