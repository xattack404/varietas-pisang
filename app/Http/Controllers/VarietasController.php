<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varietas;


class VarietasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Varietas::paginate(10);
        return view('varietas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('varietas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Varietas::create([
            'bentuk_daun'        => $request->bentuk_daun,
            'bentuk_pohon'       => $request->bentuk_pohon,
            'deskripsi'          => $request->deskripsi
        ]);
        return redirect()->route('varietas.index');
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
        $data = Varietas::find($id);
        return view('varietas.edit', compact('data'));
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
        Varietas::whereId($id)->update([
            'bentuk_daun'        => $request->bentuk_daun,
            'bentuk_pohon'       => $request->bentuk_pohon,
            'deskirpsi'          => $request->deskirpsi
        ]);
        return redirect()->route('varietas.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Varietas::whereId($id)->delete();
        return redirect()->route('varietas.index');
    }
}
