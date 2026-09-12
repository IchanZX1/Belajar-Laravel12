<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/posts", [PostController::class,"index"]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

// Route Parameters & Constraints
Route::get('/profile/{name?}', function ($name = "Tamu") {
    return "<h1>Profile: {$name}</h1>";
});

Route::get('/product/{id}', function ($id) {
    return "<h1>Product ID: {$id}</h1>";
})->whereNumber('id');

Route::get('/admin/dashboard', function () {
    return "<h1>Selamat datang di Dashboard Admin</h1>";
})->name('dashboard');

// Route Groups & Prefix
// Rute di dalam grup ini otomatis berprefiks /member DAN melewati
// middleware "member" (App\Http\Middleware\CheckRole).
//
// Rute aktivasi ini sengaja berada DI LUAR grup, untuk men-set flag
// session yang dibutuhkan CheckRole. Buka /member/activate dulu,
// baru /member/profile dan /member/settings bisa diakses.
Route::get('/member/activate', function (Request $request) {
    $request->session()->put('is_member_active', true);
    return "<h1>Status member diaktifkan ✔</h1><p>Sekarang coba /member/profile dan /member/settings</p>";
});

Route::prefix('member')->middleware('member')->group(function () {
    Route::get('/profile', function () {
        return "<h1>Profil Member</h1>";
    });

    Route::get('/settings', function () {
        return "<h1>Pengaturan Member</h1>";
    });
});


