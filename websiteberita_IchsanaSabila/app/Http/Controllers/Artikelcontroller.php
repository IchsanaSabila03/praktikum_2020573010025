<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Artikelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('back.artikel.index', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.artikel.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'judul' => 'required|max:255'
        ]);

        $Data = $request->all();
        $Data['slug'] = Str::slug($request->judul);
        $Data['gambar_artikel']= $request->file('gambar_artikel')->store('artikel');

        Artikel::create($Data);

        return redirect('/artikel')->with('success', 'Artikel berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();

        return view('back.artikel.show', [
        'artikel' => $artikel,
        'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();

        return view('back.artikel.edit', [
        'artikel' => $artikel,
        'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_artikel'))){
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'nama_artikel' => $request->nama_artikel,
                'slug' => Str::slug($request->judul),
                'deksripsi' => $request->deksripsi,
                'kategori_id' => $request->kategori_id,
            ]); 
            return redirect()->route('artikel.index')->with(['success', 'Artikel berhasil di edit']);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'nama_artikel' => $request->nama_artikel,
                'slug' => Str::slug($request->judul),
                'deksripsi' => $request->deksripsi,
                'kategori_id' => $request->kategori_id,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
            ]);
            return redirect()->route('artikel.index')->with(['success', 'Artikel berhasil di edit']);
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::destroy($id);
        return redirect('/artikel');
    }
}