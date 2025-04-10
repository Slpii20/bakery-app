<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $produk = produk::all(); // Gunakan huruf besar untuk model 'Produk'

    return view('data_kue', compact('produk')); // Perbaikan pada compact()
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_kue');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = produk::create([

            'nama_kue' => $request->nama_kue,
            'deskripsi_kue' => $request->deskripsi_kue,
            'harga_kue' => $request->harga_kue,
            'stok' => $request->stok,

        ]);
        return redirect('/data_kue');
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
         // untuk mengambil data produk berdasarkan kolom id_kue
         $produk = produk::where('id_kue', $id)->first();
         return view('ubah_kue', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        produk::where('id_kue', $id)
        ->update([

            'nama_kue' => $request->nama_kue,
            'deskripsi_kue' => $request->deskripsi_kue,
            'harga_kue' => $request->harga_kue,
            'stok' => $request->stok,
        ]);
        return redirect('/data_kue');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = produk::where('id_kue', $id)->delete();
        return redirect('/data_kue');
    }
}
