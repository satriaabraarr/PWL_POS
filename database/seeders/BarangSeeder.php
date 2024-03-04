<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK001',
                'barang_nama' => 'Laptop ASUS',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Smartphone Samsung',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN001',
                'barang_nama' => 'Kemeja Putih',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN002',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Gula Pasir',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KSH001',
                'barang_nama' => 'Obat Flu',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KSH002',
                'barang_nama' => 'Masker Kain',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'ART001',
                'barang_nama' => 'Panci Aluminium',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'ART002',
                'barang_nama' => 'Sapu Lidi',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}