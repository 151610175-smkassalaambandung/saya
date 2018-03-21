<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keterangan;
use App\Sepeda;

class KettController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keterangan = Keterangan::all();
        return view('keterangan.index',compact('keterangan','sepeda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sepeda = Sepeda::all();
        return view('keterangan.create',compact('sepeda'));
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
        $keterangan = new Keterangan();
        $keterangan->keadaan = $request->keadaan;
        $keterangan->thnklr = $request->thnklr;
        $keterangan->harga = $request->harga;
        $keterangan->desk = $request->desk;
        $keterangan->sepeda_id = $request->sepeda_id;

        $keterangan->save();

        return redirect()->route('Keterangan.index');
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
        //
        $keterangan = Keterangan::findOrFail($id);
        $sepeda = Sepeda::all();
        return view('keterangan.edit', compact('keterangan','sepeda'));
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
        //
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->keadaan = $request->keadaan;
        $keterangan->thnklr = $request->thnklr;
        $keterangan->harga = $request->harga;
        $keterangan->desk = $request->desk;
        $keterangan->sepeda_id = $request->sepeda_id;

        $keterangan->save();

        return redirect()->route('Keterangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $keterangan=Keterangan::findOrFail($id);
        $keterangan->delete();
        return redirect()->route('Keterangan.index');
    }
}
