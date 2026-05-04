<div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-60 object-cover rounded-t-lg">
    <div class="p-5">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded mb-2 inline-block">{{ $badge }}</span>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $title }}</h5>
        <p class="text-gray-500 text-sm mb-1">📍 {{ $lokasi }}</p>
        <p class="text-gray-500 text-sm mb-4">📅 {{ $tanggal }}</p>
        <div class="flex justify-between items-center">
            <span class="text-blue-600 font-bold text-lg">{{ $harga }}</span>
            <button data-modal-target="{{ $modalTarget }}" data-modal-toggle="{{ $modalTarget }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                Beli Tiket
            </button>
        </div>
    </div>
</div>