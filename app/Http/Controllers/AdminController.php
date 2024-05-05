<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.main');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function login()
     {
         return view('Dashboard.Autentifikasi.login');
     }
 
     public function aksilogin(Request $request)
     {
         $request->validate([
             "email" => "required|email",
             "password" => "required",
         ], [
             'email.required' => 'Email harus diisi',
             'email.email' => 'Format email tidak valid',
             'password.required' => 'Password harus diisi',
         ]);
     
         $credentials = $request->only("email", "password");
     
         if (Auth::attempt($credentials)) {
             $user = Auth::user();
            
             $data = [
                 'id_user' => $user->id_user,
                 'username' => $user->username,
                 'email' => $user->email,
                 'password' => $user->password,
             ];
     
             session($data);
     
             // Menambahkan alert Bootstrap 5 setelah login berhasil
             return redirect()->route('dashboard')->with('success', 'Anda Berhasil Login');
         } else {
             return back()->with('error', 'Login');
         }
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
    function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
