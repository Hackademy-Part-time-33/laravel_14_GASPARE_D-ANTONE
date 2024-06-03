<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BookController::class,'homepage'] )->name('homepage');

Route::get('/book/library',[BookController::class,'library'] )->name('library');

Route::get('/book/create',[BookController::class,'create'] )->name('create');
Route::post('/book/save',[BookController::class,'store'] )->name('store');


