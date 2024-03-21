<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 9,
                'kategori_kode' => 'MKR',
                'kategori_nama' => 'Makanan Ringan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
