<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = buku::all();
        $kategori = kategori::all();
        return view('buku.index', compact('buku', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode' => $request->kode,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'kategori_id' => $request->kategori_id,
        ];

        Buku::create($data);

        return redirect('buku')->with('success', 'Buku berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // cari ID Buku
        $buku = Buku::find($id);

        //
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->kode = $request->kode;
        $buku->buku_id = $request->buku_id;

        $buku->save();

        return redirect('buku')->with('success', 'Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);

        $buku->delete();

        return redirect('buku')->with('success', 'Buku Berhasil Dihapus');
    }
}
