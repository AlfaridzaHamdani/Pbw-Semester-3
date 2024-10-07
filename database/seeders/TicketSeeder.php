<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'tgl_berangkat' => '2024-09-30',
            'tujuan' => 'Jakarta',
            'asal' => 'Bandung',
            'nama_penumpang' => 'Tana',
            'no_kursi' => 'A1',
        ], [
            'tgl_berangkat' => '2024-09-30',
            'tujuan' => 'Jakarta',
            'asal' => 'Bandung',
            'nama_penumpang' => 'Tono',
            'no_kursi' => 'Z2',
        ]);

        Ticket::insert($data);
    }
}
