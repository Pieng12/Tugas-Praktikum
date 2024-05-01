<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $dosen = Dosen::all();
        return view('dosen', [
            'dosen' => $dosen
        ]); 
        return view('dosen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create2()
    {
        return view('create2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store2(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'email' => 'required|unique:dosen',
            'nama' => 'required',
            'no_hp' => 'required'
        ]);

        $dosen = new Dosen;
        $dosen->nip = $request->nip;
        $dosen->email = $request->email;
        $dosen->nama = $request->nama;
        $dosen->no_hp = $request->no_hp;
        $dosen->save();
        return redirect()->route('index2')->with('success','Data dosen berhasil ditambahkan');

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
    public function edit2(string $id_dosen)
{
    $dosen = Dosen::find($id_dosen);
    return view('update2', [
        'dosen' => $dosen,
        'id_dosen' => $id_dosen 
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update2(Request $request, string $id_dosen)
    {

        $dosen = Dosen::find($id_dosen);
        $dosen->nip = $request->nip;
        $dosen->email = $request->email;
        $dosen->nama = $request->nama;
        $dosen->no_hp = $request->no_hp;
        $dosen->save();
        return redirect()->route('index2');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy2($id_dosen)
    {
        $dosen = Dosen::findOrFail($id_dosen);
        $dosen->delete();
        return redirect()->route('index2');
    }
}