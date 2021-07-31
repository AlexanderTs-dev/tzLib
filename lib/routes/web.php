<?php
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::resource('author', AuthorController::class);
Route::resource('book',BookController::class);
Route::put('book/{id}/update','App\Http\Controllers\BookController@update');

Route::delete('book/{id}/delete','App\Http\Controllers\BookController@delete');
    
    
