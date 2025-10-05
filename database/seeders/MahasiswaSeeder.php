<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Vina Faizatus',
                'email' => 'vina@gmail.com',
                'nim' => '12345678',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dian Restu',
                'email' => 'dian@gmail.com',
                'nim' => '87654321',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cheryl Aurel',
                'email' => 'chryl@gmail.com',
                'nim' => '121212',
                'jurusan' => 'Bisnis Digital',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}