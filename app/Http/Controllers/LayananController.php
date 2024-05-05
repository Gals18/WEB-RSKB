<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Layanan.index');
    }
    public function UGD()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id_obat)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = time() . '.' . $request->gambar->extension();

        // Simpan gambar ke direktori 'public/images'
        $request->gambar->move(public_path('img_Layanan'), $imageName);

        $layanan = Layanan::create(
            [
                'judul' => $request->judul,
                'gambar' => $imageName,
                'deskripsi'=>$request->deskripsi,
                'added_by' => Auth::id(),
            ]
        );

        if ($layanan) {
            return redirect()->route('layanan')->withSuccess('layanan berhasil ditambahkan!');
        } else {
            return redirect()->back()->withErrors('Gagal menambahkan klasifikasi, terjadi kesalahan');
        }
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
