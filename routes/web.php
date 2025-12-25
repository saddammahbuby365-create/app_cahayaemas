<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\TestimonialPublicController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/testimoni', [TestimonialPublicController::class, 'create'])
    ->name('testimoni.create');
Route::post('/testimoni', [TestimonialPublicController::class, 'store'])
    ->name('testimoni.store');

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::patch(
            'testimonials/{testimonial}/approve',
            [TestimonialController::class, 'approve']
        )->name('testimonials.approve');
        Route::get('/admin/laporan', function () {
            return view('admin.laporan');
        })->name('admin.laporan');
        Route::get('/admin/pengaturan', function () {
            return view('admin.pengaturan');
        })->name('admin.pengaturan');
    });

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'role:user']);
