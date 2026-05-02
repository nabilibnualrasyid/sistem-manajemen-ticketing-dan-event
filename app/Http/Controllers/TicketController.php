<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getData()
    {
        // Data tiket sesuai tema PBL kamu [cite: 16]
        $dataTiket = [
            ['id' => 1, 'nama' => 'Tiket Konser Rock', 'harga' => 150000],
            ['id' => 2, 'nama' => 'Tiket Seminar AI', 'harga' => 50000],
            ['id' => 3, 'nama' => 'Tiket Workshop Laravel', 'harga' => 75000],
        ];
        return $dataTiket;
    }

    public function tampilkan()
    {
        $data = $this->getData(); // Mengambil data dari fungsi getData [cite: 39]
        return view('list_ticket', compact('data')); // Mengirim ke view 'list_ticket' [cite: 40]
    }
}