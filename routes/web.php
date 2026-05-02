<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TicketController; 


// Route Utama
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

// Praktikum 3
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// MVC PBL
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/ticket', [TicketController::class, 'tampilkan']); 