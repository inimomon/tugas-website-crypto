<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('users')->get();
        return view('templates/navbar')
            . view('dashboard', compact('data'))
            . view('templates/footer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templates/navbar')
            . view('create')
            . view('templates/footer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = DB::table('users')->insertGetId([
            'nama' => $request->nama_pengguna,
            'umur' => $request->umur,
        ]);

        DB::table('bitcoin')->insert([
            'nama_bitcoin' => $request->nama_bitcoin,
            'harga_bitcoin' => $request->harga,
            'pembeli' => $id,
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('users')
            ->join('bitcoin', 'users.id_user', '=', 'bitcoin.pembeli')  
            ->where('id_user', $id)
            ->get();

        return view('templates/navbar')
            . view('detail', compact('data'))
            . view('templates/footer');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('users')
            ->where('id_user', $id)
            ->join('bitcoin', 'users.id_user', '=', 'bitcoin.pembeli')
            ->get();
        return view('templates/navbar')
            . view('edit', compact('data'))
            . view('templates/footer');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('users')
            ->where('id_user', $request->id)
            ->update([
               'nama' => $request->nama_pengguna,
               'umur' => $request->umur, 
        ]);

        DB::table('bitcoin')
            ->where('pembeli', $request->id)
            ->update([
               'nama_bitcoin' => $request->nama_bitcoin,
               'harga_bitcoin' => $request->harga, 
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id_user', $id)->delete();
        return redirect('/');
    }
}
