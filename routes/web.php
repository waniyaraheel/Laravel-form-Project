<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/form', [HomeController::class, 'createForm'])->name('form');

Route::post('/create', [HomeController::class, 'store'])->name('create');


Route::get('/list', [HomeController::class, 'listData'])->name('listdata');