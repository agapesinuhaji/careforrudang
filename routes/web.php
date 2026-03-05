<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MessageController::class, 'create']);
Route::post('/kirim-kritik-saran', [MessageController::class, 'store'])->name('message.store');