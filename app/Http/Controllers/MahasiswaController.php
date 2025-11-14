<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display
     */
    public function index ()
    {
        //
    }

    /**
     * show the form for creating a new resource
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource
     */
    public function show(String $param1)
    {
        if($param1 == 'detail'){
            return view('halaman-mahasiswa-detail');
        }else if($param1 == 'profil'){
            return view('halaman-mahasiswa-profil');
        }
    }

    /**
     * show the form for editing the specified resource
     */
    public function edit(String $id)
    {
        //
    }

    /**
     * Update the specified resource in storage
     */
    public function update(Request $request, String $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage
     */
    public function destroy(String $id)
    {
        //
    }
}
