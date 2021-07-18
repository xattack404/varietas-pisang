<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CekPisang;
use App\Varietas;
use App\JenisPisang;

class CekPisangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CekPisang::paginate(10);
        return view('cekpisang.index', compact('data'));
    }

    public function prosescek(Request $request)
    {
        $data = Varietas::select('*')
            ->where([
                'bentuk_buah' => $request->bentuk_buah,
                'bentuk_daun' => $request->bentuk_daun,
                'warna' => $request->warna
            ])
            ->groupBy('bentuk_buah')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1);
        return view('cekpisang.hasil', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cekpisang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CekPisang::create([
            'warna'              => $request->warna,
            'panjang'            => $request->panjang,
            'diameter'           => $request->diameter,
            'bentuk_buah'        => $request->bentuk_buah,
            'bentuk_daun'        => $request->bentuk_daun,
            'bentuk_pohon'       => $request->bentuk_pohon,
            'id_jenis'        => $request->jenis_pisang

        ]);
        return redirect()->route('cekpisang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CekPisang::find($id);
        return view('cekpisang.edit', compact('data'));
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
        CekPisang::whereId($id)->update([
            'nama_pisang'     => $request->nama_pisang,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('cekpisang.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        CekPisang::whereId($id)->delete();
        return redirect()->route('cekpisang.index');
    }
}
