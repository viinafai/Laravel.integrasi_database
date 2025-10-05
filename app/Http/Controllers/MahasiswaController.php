<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insertData()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Faizatus',
            'email' => 'faiiza@gmail.com',
            'nim' => '11223345',
            'jurusan' => 'Teknik Imformatika',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Data berhasil ditambahkan!";
    }

    public function getData()
    {
        $mahasiswas = DB::table('mahasiswas')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }
}