@extends('layouts.main')

@section('title', 'Daftar Event & Tiket')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/style_steven.css') }}">
@endsection

@section('content')
<div class="py-8 px-4">
    <h1 class="text-3xl font-bold mb-2">Event Mendatang</h1>
    <p class="text-gray-500 mb-8">Temukan event terbaik dan pesan tiketmu sekarang!</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
      {{-- Card 1 --}}

    <x-card 
        :image="asset('images/gambar1.png')"
        badge="Musik"
        title="Music Fest 2026"
        lokasi="Batam Centre"
        tanggal="20 Juni 2026"
        harga="Rp 150.000"
        modalTarget="modalEvent1"
    />

    {{-- Card 2 --}}

    <x-card 
        :image="asset('images/gambar2.png')"
        badge="Olahraga"
        title="Fun Run Batam 2026"
        lokasi="Batam Centre"
        tanggal="25 Juni 2026"
        harga="Rp 100.000"
        modalTarget="modalEvent2"
    />

{{-- Modal Event 1 --}}
<div id="modalEvent1" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md">
        <div class="relative bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">Konfirmasi Pembelian</h3>
                <button data-modal-hide="modalEvent1"
                    class="text-gray-400 hover:text-gray-900 text-sm w-8 h-8 flex items-center justify-center">✕</button>
            </div>
            <div class="p-4">
                <p class="text-gray-600 mb-2">🎵 <strong>Music Fest 2026</strong></p>
                <p class="text-gray-600 mb-2">📍 Batam Centre</p>
                <p class="text-gray-600 mb-4">💰 Rp 150.000 / tiket</p>
                <div class="flex gap-3">
                    <button data-modal-hide="modalEvent1"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        Beli Sekarang
                    </button>
                    <button data-modal-hide="modalEvent1"
                        class="w-full border border-gray-300 text-gray-700 py-2 rounded-lg hover:bg-gray-100 transition">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Event 2 --}}
<div id="modalEvent2" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md">
        <div class="relative bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">Konfirmasi Pembelian</h3>
                <button data-modal-hide="modalEvent2"
                    class="text-gray-400 hover:text-gray-900 text-sm w-8 h-8 flex items-center justify-center">✕</button>
            </div>
            <div class="p-4">
                <p class="text-gray-600 mb-2">🏃 <strong>Fun Run Batam 2026</strong></p>
                <p class="text-gray-600 mb-2">📍 Batam Centre</p>
                <p class="text-gray-600 mb-4">💰 Rp 100.000 / tiket</p>
                <div class="flex gap-3">
                    <button data-modal-hide="modalEvent2"
                        class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                        Beli Sekarang
                    </button>
                    <button data-modal-hide="modalEvent2"
                        class="w-full border border-gray-300 text-gray-700 py-2 rounded-lg hover:bg-gray-100 transition">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection