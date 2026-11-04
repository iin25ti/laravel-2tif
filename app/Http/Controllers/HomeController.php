<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'username'        => 'Laravel 2TIC',
            'last_login'      => date('Y-m-d H:i:s'),
            'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'],
        ];
        return view('home', $data);
    }

    /**
     * Fungsi untuk memproses Request/AJAX Login
     */
    public function login(Request $request)
    {
        // Ambil input dari request
        $username = $request->input('username');
        $password = $request->input('password');

        // Mengembalikan respon JSON ke AJAX
        return response()->json([
            'status'  => 'success',
            'message' => 'Data berhasil diterima Controller!',
            'data'    => [
                'username' => $username
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}