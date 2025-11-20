<?php
<<<<<<< Updated upstream
namespace App\Http\Controllers;

=======

namespace App\Http\Controllers;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< Updated upstream
        $data['username']        = 'Heroku';
        $data['last_login']      = date('Y-m-d H:i:s');
        $data['list_pendidikan'] = ['SD', 'SMP', 'SMA', 'S1', 'S2', '53'];
=======
        $data ['username'] = 'Heroku';
        $data ['last_login'] = date('Y-m-d H:i:s');
        $data ['List_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];
>>>>>>> Stashed changes
        return view('home', $data);
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
