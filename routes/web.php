<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

// Home
Route::get('/', function () {
    return view('home');
});

// Books
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}', [BookController::class, 'update']);

// Authors
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors', [AuthorController::class, 'store']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit']);
Route::put('/authors/{id}', [AuthorController::class, 'update']);

// Publishers
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/create', [PublisherController::class, 'create']);
Route::post('/publishers', [PublisherController::class, 'store']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);
Route::get('/publishers/{id}/edit', [PublisherController::class, 'edit']);
Route::put('/publishers/{id}', [PublisherController::class, 'update']);