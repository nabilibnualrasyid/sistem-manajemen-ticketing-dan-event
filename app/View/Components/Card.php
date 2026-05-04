<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public string $image,
        public string $badge,
        public string $title,
        public string $lokasi,
        public string $tanggal,
        public string $harga,
        public string $modalTarget,
    ) {}

    public function render()
    {
        return view('components.card');
    }
}