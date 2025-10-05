@extends('layouts.app')

@section('content')
<div class="bg-green-100 p-6 rounded shadow text-green-800">
    <h2 class="text-xl font-bold mb-2">Data Berhasil Disimpan</h2>
    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Telepon: {{ $nim }}</p>
    <p>Alamat: {{ $jurusan }}</p>
</div>
@endsection