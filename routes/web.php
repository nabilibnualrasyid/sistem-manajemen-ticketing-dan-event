<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TicketController;


Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/product', 'product'); 
Route::view('/contact', 'contact');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/dashboard', 'dashboard');
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/ticket-list', [TicketController::class, 'tampilkan']);