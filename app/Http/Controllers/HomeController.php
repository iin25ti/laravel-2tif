<?php
<<<<<<< HEAD

=======
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $username = 'Heroku';
        $last_login = date('Y-m-d H:i:s');
        $list_pendidikan = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];

        return view('home', compact('username', 'last_login', 'list_pendidikan'));
=======
        /* atau Cara 2 */
        $data = [
            'username'        => 'Laravel 2TIC',
            'last_login'      => date('Y-m-d H:i:s'),
            'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'],
        ];
        return view('home', $data);
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
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
<<<<<<< HEAD
}
=======
}
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
