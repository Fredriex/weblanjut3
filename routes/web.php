<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/latihan09/{a}/{b}',[Controller::class, 'prosestambah']);

Route::get('/latihan10',[Controller::class, 'latihan10']);
Route::get('/x/{op}/{x}/{y}', [Controller::class, 'latihan9']);
