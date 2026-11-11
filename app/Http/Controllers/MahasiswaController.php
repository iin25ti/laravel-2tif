<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim'  => 'required',
        ]);

        Mahasiswa::create([
            'nama'      => $request->nama,
            'nim'       => $request->nim,
            'prodi'     => $request->prodi ?? null,
            'tgl_lahir' => $request->tgl_lahir ?? null,
            'alamat'    => $request->alamat ?? null,
        ]);

        return redirect()->route('mahasiswa.index');
    }
}