@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-3xl font-bold mb-6 text-center">Hubungi Kami</h1>
    
    <form action="#" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700">Nama Lengkap</label>
            <input type="text" class="w-full border p-2 rounded mt-1" placeholder="Masukkan nama kamu...">
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" class="w-full border p-2 rounded mt-1" placeholder="Masukkan email kamu">
        </div>
        <div>
            <label class="block text-gray-700">Pesan</label>
            <textarea class="w-full border p-2 rounded mt-1" rows="4" placeholder="Tulis pesanmu di sini..."></textarea>
        </div>
        <button type="button" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Kirim Pesan
        </button>
    </form>
</div>
@endsection