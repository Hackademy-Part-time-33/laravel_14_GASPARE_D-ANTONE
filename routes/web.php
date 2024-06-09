<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BookController::class,'homepage'] )->name('homepage');

Route::get('/book/index',[BookController::class,'index'] )->name('index');


Route::get('/book/{book}/show',[BookController::class,'show'] )->name('book.show');



route::middleware(['auth'])->group(function(){
    Route::get('/book/create',[BookController::class,'create'] )->name('create');
    Route::post('/book/save',[BookController::class,'store'] )->name('store');
    Route::delete('/book/{book}',[BookController::class,'destroy'] )->name('book.destroy');
    Route::get('/book/{book}/edit',[BookController::class,'edit'] )->name('book.edit');
    Route::put('/book/{book}',[BookController::class,'update'] )->name('book.update');
    
});

Route::resource('authors', AuthorController::class);

Route::resource('categories', CategoryController::class);




