<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController as Home;
use App\Http\Controllers\Auth\AuthPengelolaController as AuthPengelola;
use App\Http\Controllers\Superadmin\SuperadminController as Superadmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    // routing home
    Route::get('/', [Home::class, 'index'])->name('get.home');
    // routing login pengelola
    Route::get('/login-pengelola', [AuthPengelola::class, 'login'])->name('get.loginPengelola');
    Route::post('/login-pengelola', [AuthPengelola::class, 'login'])->name('post.loginPengelola');
});

Route::middleware('role:superadmin', 'auth:pengelola')->group(function(){
    Route::get('/dashboard/superadmin', [Superadmin::class, 'index'])->name('get.indexSuperadmin');
    Route::get('/dashboard/superadmin/logout', [AuthPengelola::class, 'logout'])->name('get.logoutSuperadmin');
});