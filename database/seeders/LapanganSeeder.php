<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lapangan = [
            [
                'nama_lapangan' => 'Lapangan A',
                'harga_perjam' => 100000,
            ],
            [
                'nama_lapangan' => 'Lapangan B',
                'harga_perjam' => 150000,
            ],
        ];

        DB::table('lapangan')->insert($lapangan);
    }
}
