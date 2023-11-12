<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comments\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CommentsController::class, 'index'])->name('home.index');
Route::post('/', [CommentsController::class, 'store'])->name('home.store');

