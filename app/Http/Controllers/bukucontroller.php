<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = buku::all();
        return view('buku.index',['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
        ]);
        buku::create([
            'judul' =>$request->judul,
            'penulis' =>$request->penulis,
            'penerbit' =>$request->penerbit,
            'tahunterbit' =>$request->tahunterbit,
        ]);

        return redirect('buku')->with('succes','Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = buku::find($id);
        return view('buku.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
        ]);
        $data =([
            'judul' =>$request->judul,
            'penulis' =>$request->penulis,
            'penerbit' =>$request->penerbit,
            'tahunterbit' =>$request->tahunterbit,
        ]);

        buku::findOrFail($id)->update($data);
        return redirect('buku')->with('succes','Buku Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        //
        $buku = buku::findOrFail($id);
        $buku->delete();
        return redirect('buku')->with('succes','Buku Berhasil Dihapus');
    }
}
