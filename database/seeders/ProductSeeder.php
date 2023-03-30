<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [[
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ],[
            'nama_produk'=>'GAMEN Titan Elite Mechanical Pluggable Switch Blue Gaming Keyboard Wired RGB LED Light PBT Keycaps Original For PC Laptop ',
            'harga_produk'=>'300.000',
            'berat_produk'=>'300',
            'stok_produk'=> '3',
            'panjang_produk'=>'50',
            'lebar_produk'=>'20',
            'tinggi_produk'=>'2',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'Outemu Blue Switch,Swappable 3 pin switch,Kualitas Switch A+ ',
            'kategori_id'=>'2'
        ],
        [
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ],
        [
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ],
        [
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ],
        [
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ],
        [
            'nama_produk'=>'Razer DeathAdder Essential BLACK ',
            'harga_produk'=>'275.000',
            'berat_produk'=>'200',
            'stok_produk'=> '2',
            'panjang_produk'=>'20',
            'lebar_produk'=>'10',
            'tinggi_produk'=>'5',
            'informasi_produk'=>'Brand New in Box',
            'garansi_produk'=> true,
            'kelengkapan_produk'=> 'lengkap',
            'deskripsi_produk'=> 'True 6,400 DPI Optical Sensor

            Ergonomic Form Factor

            5 Hyperesponse Buttons

            10 million-click life cycle

            Proven history of performance',
            'kategori_id'=>'1'
        ]];
        DB::table('products')->insert($barang);
    }
}
