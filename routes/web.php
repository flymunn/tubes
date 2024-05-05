<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('home');
// });

Route::resource("/book", BookController::class);
