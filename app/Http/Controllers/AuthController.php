<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
         $request->validate([
            'username' => 'required',
            'password' => 'required|min:3|regex:/[A-Z]/'
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 3 karakter.',
            'password.regex' => 'Password harus mengandung huruf kapital.'
        ]);

        // Jika username dan password sesuai
        if ($request->username === 'Admin' && $request->password === 'Admin123') {
            return redirect('/success')->with('message', 'Login berhasil!');
        }

        // Jika tidak sesuai
        return back()->withErrors(['msg' => 'Username atau password salah.']);
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
