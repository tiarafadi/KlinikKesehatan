<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $Pasien = Pasien::all();
        return view('Pasien.index', compact('Pasien'));
    }

    public function create()
    {
        return view('Pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namapasien' => 'required',
            'kodepasien' => 'required',
            'namadokter' => 'required',
            'lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'jeniskelamin' => 'required',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required',
        ]);

        Pasien::create($request->all());

        return redirect()->route('Pasien.index');
    }

    public function show(Pasien $Pasien)
    {
        return view('Pasien.show', compact('Pasien'));
    }

    public function edit(Pasien $Pasien)
    {
        return view('Pasien.edit', compact('Pasien'));
    }

    public function update(Request $request, Pasien $Pasien)
    {
        $request->validate([
            'namapasien' => 'required',
            'kodepasien' => 'required',
            'namadokter' => 'required',
            'lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'jeniskelamin' => 'required',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required',
        ]);


        $Pasien->update($request->all());

        return redirect()->route('Pasien.index');
    }

    public function destroy(Pasien $Pasien)
    {
        $Pasien->delete();
        return redirect()->route('Pasien.index');
    }
}
