<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display
     */
    public function index ()
    {
        return 'Menampilkan Data Matakuliah';
    }

    /**
     * show the form for creating a new resource
     */
    public function create()
    {
        return 'Membuat form matkul';
    }

    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {
        return 'simpan matkul';
    }

    /**
     * Display the specified resource
     */
    public function show(String $param1)
    {
        if($param1 == 'ST445'){
            return view('halaman-ST445');
        }else{
            return view('halaman-kosong');
        }
    }

    /**
     * show the form for editing the specified resource
     */
    public function edit(String $id)
    {
        return 'ubah matkul';
    }

    /**
     * Update the specified resource in storage
     */
    public function update(Request $request, String $id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage
     */
    public function destroy(String $id)
    {
        return 'hapus';
    }
}
