<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaranController;

// Tambahkan route login di sini
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route-route lainnya tetap seperti semula
Route::get('/', [PostController::class, 'home']);
Route::get('/index', [PostController::class, 'index']);
Route::get('/galeri', [PostController::class, 'galeri']);

Route::post('/user-input', 'UserInputController@store')->name('user-input.store');


Route::get('/tentangkami', function() {
    return view('tentangkami');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/saran', function() {
    return view('saran');
});



Route::get('tentangkami', [SaranController::class, 'ceksaran']);
Route::post('simpan-form', [SaranController::class, 'simpan'])->name('simpan-form');

Route::get('/ShowSaran', [SaranController::class, 'lihatsaran']);


Route::resource('posts', PostController::class);

Route::get('/certificates', function () {
    return view('certificates');
})->name('certificates');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () { Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/ShowSaran', [SaranController::class, 'index'])->name('show.saran'); });

Route::middleware(['auth'])->group(function () {
    Route::put('/users/{username}', [AuthController::class, 'editUser'])->name('users.edit');
    Route::delete('/users/{username}', [AuthController::class, 'deleteUser'])->name('users.delete');
});