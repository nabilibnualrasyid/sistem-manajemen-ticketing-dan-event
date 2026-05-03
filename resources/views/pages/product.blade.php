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
        <div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition">
            <img src="{{ asset('images/gambar1.png') }}" alt="Event 1" class="w-full h-60 object-cover rounded-t-lg">
            <div class="p-5">
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded mb-2 inline-block">Musik</span>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Music Fest 2026</h5>
                <p class="text-gray-500 text-sm mb-1">📍 Batam Centre</p>
                <p class="text-gray-500 text-sm mb-4">📅 20 Juni 2026</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-600 font-bold text-lg">Rp 150.000</span>
                    {{-- Button Interaktif --}}
                    <button data-modal-target="modalEvent1" data-modal-toggle="modalEvent1"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                        Beli Tiket
                    </button>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition">
            <img src="{{ asset('images/gambar2.png') }}" alt="Event 2" class="w-full h-60 object-cover rounded-t-lg">
            <div class="p-5">
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded mb-2 inline-block">Olahraga</span>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Fun Run Batam 2026</h5>
                <p class="text-gray-500 text-sm mb-1">📍 Batam Centre</p>
                <p class="text-gray-500 text-sm mb-4">📅 25 Juni 2026</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-600 font-bold text-lg">Rp 100.000</span>
                    {{-- Button Interaktif --}}
                    <button data-modal-target="modalEvent2" data-modal-toggle="modalEvent2"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                        Beli Tiket
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

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