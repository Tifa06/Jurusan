<?php

namespace App\Http\Controllers;

use App\jurusan;
use Illuminate\Http\Request;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = jurusan::all();
        return view('jurusan.index', [
            'jurusans' => $jurusans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ])->validate();

        $jurusan = new jurusan($validatedData);
        $jurusan->save();

        return redirect(route('daftarJurusan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(jurusan $jurusan)
    {
        return view('jurusan.edit', [
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jurusan $jurusan)
    {
        $validatedData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ])->validate();

        $jurusan->nama = $validatedData['nama'];
        $jurusan->deskripsi = $validatedData['deskripsi'];
        $jurusan->save();

        return redirect(route('daftarJurusan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect(route('daftarJurusan'));
    }
}
