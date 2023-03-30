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
       $kategori=[['nama'=> 'Mouse'],
       ['nama'=> 'Keyboard'],
        ['nama'=> 'Handphone'],
        ['nama'=> 'VGA'],
        ['nama'=>'Console'],
        ['nama'=>'CPU'],
        ['nama'=>'Earphone']];

        DB::table('kategoris')->insert($kategori);
    }
}
