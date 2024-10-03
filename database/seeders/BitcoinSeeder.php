<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BitcoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bitcoin')->insert([
            [
                'nama_bitcoin' => 'Etherium',
                'harga_bitcoin' => 5000000,
                'pembeli' => 1,
            ],
            [
                'nama_bitcoin' => 'Bitcoin',
                'harga_bitcoin' => 10000000,
                'pembeli' => 1,
            ],
            [
                'nama_bitcoin' => 'Shiba Inu',
                'harga_bitcoin' => 100000,
                'pembeli' => 2,
            ],
            [
                'nama_bitcoin' => 'Dogecoin',
                'harga_bitcoin' => 1000,
                'pembeli' => 3,
            ],
        ]);
    }
}
