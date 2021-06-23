<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;

class PeriodeController extends Controller
{
    public function index()
    {
        $name = "web Olah Data Periode";
        $periode = Periode::all();
        return view('periode', ['periode' => $periode, 'name_web' => $name]);
    }

    public function tambah()
    {
        $name = "halaman tambah data periode";
        return view('periode-tambah', ['name_web' => $name]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bulan' => 'required',
            'tahun' => 'required',
            'waktu_kerja' => 'required'
        ]);
        Periode::create([
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'waktu_kerja' => $request->waktu_kerja
        ]);
        return redirect('/periode');
    }
    public function edit($id)
    {
        $name = "Web Update Data Periode";
        $periode = Periode::find($id);
        //var_dump($periode);
        //die;
        return view('periode-edit', ['name_web' => $name, 'periode' => $periode]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'bulan' => 'required',
            'tahun' => 'required',
            'waktu_kerja' => 'required'
        ]);

        $periode = Periode::find($id);
        $periode->bulan = $request->bulan;
        $periode->tahun = $request->tahun;
        $periode->waktu_kerja = $request->waktu_kerja;
        $periode->save();
        return redirect('/periode');
    }

    public function delete($id)
    {
        $periode = Periode::find($id);
        $periode->delete();
        return redirect('/periode');
    }
}