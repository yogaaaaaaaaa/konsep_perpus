<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = new Buku();
        $buku->pengarang = '';
        $buku->judul = '';
        $buku->thn_terbit = '';
        $buku->save();
    }
}
