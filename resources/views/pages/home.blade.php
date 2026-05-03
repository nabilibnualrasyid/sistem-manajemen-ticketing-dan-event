@extends('layouts.main')

@section('title', 'HOME')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/style_steven.css') }}">
@endsection

@section('content')
<div class="text-center py-16 px-4">

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

    {{-- Flowbite Card Component --}}
    <div class="grid md:grid-cols-3 gap-8 mt-20">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-blue-500 text-3xl mb-3">🎫</div>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Beli Tiket</h5>
            <p class="text-gray-500 text-sm">Cari event favoritmu dan dapatkan tiketnya dalam hitungan detik.</p>
            <a href="/product" class="inline-flex items-center mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Lihat Event →
            </a>
        </div>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-blue-500 text-3xl mb-3">📅</div>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Buat Event</h5>
            <p class="text-gray-500 text-sm">Kelola event kamu sendiri dengan sistem manajemen yang lengkap.</p>
            <a href="/dashboard" class="inline-flex items-center mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Mulai Sekarang →
            </a>
        </div>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-blue-500 text-3xl mb-3">⚡</div>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Instan Konfirmasi</h5>
            <p class="text-gray-500 text-sm">Tiket langsung dikirim ke email setelah pembayaran dikonfirmasi.</p>
            <a href="/login" class="inline-flex items-center mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Daftar Sekarang →
            </a>
        </div>
    </div>
</div>
@endsection