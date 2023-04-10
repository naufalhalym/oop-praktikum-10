<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Mahasiswa::all();
        return view('Mahasiswa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mahasiswa.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mhsw_nim' => 'bail|required|unique:tb_mhsw',
            'mhsw_nama' => 'required'
        ],
        [
            'mhsw_nim.required' => 'NIM wajib diisi',
            'mhsw_nim.unique' => 'Nama tahun sudah ada',
            'mhsw_nama.required' => 'Nama wajib diisi'
        ]);

        Mahasiswa::create([
            'mhsw_nim' => $request -> mhsw_nim,
            'mhsw_nama' => $request -> mhsw_nama,
            'mhsw_jurusan' => $request -> mhsw_jurusan,
            'mhsw_alamat' => $request -> mhsw_alamat,
        ]);
        return redirect ('Mahasiswa');
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
