<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required'
        ]);

        $tamu = tamu::create([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);

        if($tamu){
            return redirect()->route('index')->with(['success' => 'Data Berhasil Terekam!']);
        }else{
            return redirect()->route('index')->with(['error' => 'Data Gagal Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tamu $tamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(tamu $tamu)
    {
        //
    }
}
