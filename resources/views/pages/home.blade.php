@extends('layouts.main')

@section('title', 'HOME')

@section('content')
    {{-- Konten halaman kamu di sini (tanpa nav & footer) --}}
<div class="text-center py-16 px-4">
    <!-- Hero Section -->
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4">
        Selamat Datang di <span class="text-blue-600">Steven.tid</span>
    </h1>
    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
        Solusi termudah untuk manajemen event dan pemesanan tiket online. 
        Cepat, aman, dan tanpa ribet.
    </p>
    
    <div class="flex justify-center gap-4">
        <a href="/login" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            Mulai Sekarang
        </a>
        <a href="/about" class="border border-gray-300 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            Pelajari Selengkapnya
        </a>
    </div>

    <!-- Simple Features Info -->
    <div class="grid md:grid-cols-3 gap-8 mt-20">
        <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="text-blue-500 text-3xl mb-3">🎫</div>
            <h3 class="font-bold text-lg mb-2">Beli Tiket</h3>
            <p class="text-gray-500 text-sm">Cari event favoritmu dan dapatkan tiketnya dalam hitungan detik.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="text-blue-500 text-3xl mb-3">📅</div>
            <h3 class="font-bold text-lg mb-2">Buat Event</h3>
            <p class="text-gray-500 text-sm">Kelola event kamu sendiri dengan sistem manajemen yang lengkap.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="text-blue-500 text-3xl mb-3">⚡</div>
            <h3 class="font-bold text-lg mb-2">Instan Konfirmasi</h3>
            <p class="text-gray-500 text-sm">Tiket langsung dikirim ke email setelah pembayaran dikonfirmasi.</p>
        </div>
    </div>
</div>
@endsection