<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('index',funtion(){
//     return view('index');
// });
Route::get('home', function () {
    return view('index');
});