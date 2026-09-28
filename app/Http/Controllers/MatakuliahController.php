<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }

        return "Masukkan kode matakuliah!";
    }

    public function create()
    {
        return "Menampilkan form tambah data matakuliah";
    }

    public function store(Request $request)
    {
        return "Proses menyimpan data matakuliah";
    }

    public function edit($id)
    {
        return "Menampilkan form edit matakuliah " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Proses mengupdate data matakuliah " . $id;
    }

    public function destroy($id)
    {
        return "Proses menghapus data matakuliah " . $id;
    }
}

// Route untuk fitur show dengan parameter opsional
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route resource sisanya (index, create, store, edit, update, destroy)
Route::resource('matakuliah', MatakuliahController::class)->except(['show']);