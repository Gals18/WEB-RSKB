<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // sleep(3);
        return view('component.Layout.main');
    }

    public function profil(){
        return view('component.Layout.profil');
    }

    public function ugd(){
        return view('component.Layout.UGD');
    }

    public function poliklinik(){
        return view('component.Layout.poliklinik');
    }

    public function berita(){
        return view('component.Layout.berita');
    }

    public function rawat(){
        return view('component.Layout.rawatinap');
    }
    public function operasi(){
        return view('component.Layout.operasi');
    }
    public function radiologi(){
        return view('component.Layout.radiologi');
    }
    public function laboratorium(){
        return view('component.Layout.laboratorium');
    }
    public function apotek(){
        return view('component.Layout.apotek');
    }
    public function pengumuman(){
        return view('component.Layout.pengumuman');
    }
    public function jadwaldokter(){
        return view('component.Layout.jadwaldokter');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
