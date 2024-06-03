<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $Dokter = Dokter::all();
        return view('Dokter.index', compact('Dokter'));
    }

    public function create()
    {
        return view('Dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dokter' => 'required',
            'nama_dokter' => 'required',
            'jadwal_praktek' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|string|max:20',

        ]);

        $dokter = new Dokter();
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->kode_dokter = $request->kode_dokter;
        $dokter->jadwal_praktek = $request->jadwal_praktek;
        $dokter->telepon = $request->telepon;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->save();

        return redirect()->route('Dokter.index');
    }

    public function show(Dokter $Dokter)
    {
        return view('Dokter.show', compact('Dokter'));
    }

    public function edit(Dokter $Dokter)
    {
        return view('Dokter.edit', compact('Dokter'));
    }

    public function update(Request $request, Dokter $Dokter)
    {
        $request->validate([
            'kode_dokter' => 'required',
            'nama_dokter' => 'required',
            'jadwal_praktek' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|string|max:20',

        ]);

        $Dokter->update($request->all());

        return redirect()->route('Dokter.index');
    }

    public function destroy(Dokter $Dokter)
    {
        $Dokter->delete();
        return redirect()->route('Dokter.index');
    }
}
