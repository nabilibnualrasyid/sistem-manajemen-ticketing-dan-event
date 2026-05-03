@extends('layouts.main')

@section('title', 'Daftar Event & Tiket')

@section('content')
<div class="py-8">
    <h1 class="text-2xl font-bold mb-6">Event Mendatang</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Contoh Card Event -->
        <div class="border rounded-lg overflow-hidden shadow-sm bg-white">
            <div class="h-40 bg-gray-200 flex items-center justify-center text-gray-500 italic">Thumbnail Event</div>
            <div class="p-4">
                <h3 class="font-bold text-lg">Music Fest 2026</h3>
                <p class="text-gray-600 text-sm mb-4">Lokasi: Batam Centre</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-600 font-bold">Rp 150.000</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Beli Tiket</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection