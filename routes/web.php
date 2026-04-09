<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

//Home route
Route::get('/', function () {
    return view('home');
});

// Books routes
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

// Authors routes
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// Publishers routes
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);

