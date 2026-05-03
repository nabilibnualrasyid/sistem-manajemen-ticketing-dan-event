<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/pages/home');
});

// Halaman utama dengan prefix pages
Route::prefix('pages')->group(function () {
    Route::view('/home', 'pages.home');
    Route::view('/about', 'pages.about');
    Route::view('/product', 'pages.product');
    Route::view('/contact', 'pages.contact');
    Route::view('/dashboard', 'pages.dashboard');
    Route::view('/event', 'pages.event');
    Route::view('/list-ticket', 'pages.list_ticket');
    Route::view('/welcome', 'pages.welcome');
});
Route::view('/login', 'pages.login');
Route::view('/register', 'pages.register');
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/ticket-list', [TicketController::class, 'tampilkan']);
Route::get('/products', [ProductController::class, 'index']);