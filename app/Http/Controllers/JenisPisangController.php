<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisPisang;

class JenisPisangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JenisPisang::paginate(10);
        return view('jenispisang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenispisang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           JenisPisang::create([
                'nama_pisang'     => $request->nama_pisang,
                'bentuk'          => $request->bentuk,
                'panjang'         => $request->panjang,
                'diameter'        => $request->diameter,
                'bentuk_luar'     => $request->bentuk_luar,
                'gambar'          => $request->gambar,
                'id_variates'     => $request->id_variates
                ]);    
        return redirect()->route('jenispisang.index');
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
        $data = JenisPisang::find($id);
        return view('jenispisang.edit',compact('data'));
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
        JenisPisang::whereId($id)->update([
            'nama_pisang'     => $request->nama_pisang,
                'bentuk'      => $request->bentuk,
                'panjang'     => $request->panjang,
                'diameter'    => $request->diameter,
                'bentuk_luar' => $request->bentuk_luar,
                'gambar'      => $request->gambar,
                'id_variates' => $request->id_variates
        ]);
        return redirect()->route('jenispisang.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        JenisPisang::whereId($id)->delete();
        return redirect()->route('jenispisang.index');
    }
    
}
