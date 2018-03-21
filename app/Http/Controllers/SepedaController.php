<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sepeda;
use App\Tipe;
use App\Merek;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sepeda = Sepeda::all();
        return view('sepeda.index',compact('sepeda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipe = Tipe::all();
        $merek = Merek::all();
        return view('sepeda.create',compact('tipe','merek'));
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
        $sepeda = new Sepeda();
        $sepeda->nama = $request->nama;
        $sepeda->mereks_id = $request->mereks_id;
        $sepeda->tipes_id = $request->tipes_id;
        $sepeda->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $sepedas = $request->file('foto');
            $extension = $sepedas->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $sepedas->move($destinationPath, $filename);
            $sepeda->foto = $filename;
        }
        $sepeda->save();

        return redirect()->route('sepeda.index');
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
        $tipe = Tipe::all();
        $merek = Merek::all();
        $sepeda = Sepeda::findOrFail($id);
        return view('sepeda.edit', compact('sepeda','tipe','merek'));
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
        $sepeda = Sepeda::findOrFail($id);
        $sepeda->nama = $request->nama;
        $sepeda->mereks_id = $request->mereks_id;
        $sepeda->tipes_id = $request->tipes_id;
        $sepeda->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $sepedas = $request->file('foto');
            $extension = $sepedas->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $sepedas->move($destinationPath, $filename);
            $sepeda->foto = $filename;
        }
        $sepeda->save();
        return redirect()->route('sepeda.index');

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
        $sepeda=Sepeda::findOrFail($id);
        $sepeda->delete();
        return redirect()->route('sepeda.index');
    }
}
