<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Rekam;
use App\Models\Diagnosa;

class KlinikKesehatanController extends Controller
{
    public function index()
    {
        $Dokter = Dokter::all();
        $Pasien = Pasien::all();
        $Obat = Obat::all();
        $Rekam = Rekam::all();
        $Diagnosa = Diagnosa::all();
        return view('KlinikKesehatan.table', compact('Dokter', 'Pasien', 'Obat', 'Rekam', 'Diagnosa'));
}

public function create()
{
    return view('KlinikKesehatan.table');
}   

public function store(Request $request) 
{
    Dokter::create($request->all());
    Pasien::create($request->all());
    Obat::create($request->all());
    Rekam::create($request->all());
    Diagnosa::create($request->all());
    return redirect()->route('Klinikkesehatan.index');
    $Klinikkesehatan->save();
}

public function show(string $id)
{
    $Dokter= dokter::find($id);
    $Pasien= pasien::find($id);
    $Obat= obat ::find($id);
    $Rekam= rekam ::find($id);
    $Diagnosa= diagnosa ::find($id);


    return view('Klinkkesehatan.show', compact('Dokter', 'Dokter', 'Pasien', 'Obat', 'Rekam','Diagnosa'));
}

public function edit(string $id)
{
    $Dokter= dokter::find($id);
    $Pasien= pasien::find($id);
    $Obat= obat ::find($id);
    $Rekam= rekam ::find($id);
    $Diagnosa= diagnosa ::find($id);


    return view('Klinkkesehatan.show', compact('Dokter', 'Pasien','Obat', 'Rekam', 'Diagnosa'));

}

public function update(Request $request) 
{
    Dokter::update($request->all());
    Pasien::update($request->all());
    Obat::update($request->all());
    Rekam::update($request->all());
    Diagnosa::update($request->all());
    return redirect()->route('Klinikkesehatan.index');
    $Klinikkesehatan->save();


    return redirect()->rute('Klinikkesehatan.index');
}

public function public(string $id)
{
    $Dokter= dokter::destroy($id);
    $Pasien= pasien::destroy($id);
    $Obat= obat ::destroy($id);
    $Rekam= rekam ::destroy($id);
    $Diagnosa= diagnosa ::destroy($id);


    return redirect()->rute('Klinikkesehatan.index');
    return redirect()->rute('Klinikkesehatan.index');
    return redirect()->rute('Klinikkesehatan.index');
    return redirect()->rute('Klinikkesehatan.index');
    return redirect()->rute('Klinikkesehatan.index');
}
}

        
