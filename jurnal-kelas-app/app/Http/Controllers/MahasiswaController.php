<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Prodi;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('prodi')->get();
        /**
         * SELECT * FROM mahasiswa
         * JOIN prodi ON mahasiswa.prodi_id=prodi.prodi_id
         */
        // return response()->json($mahasiswa); exit;

        return view('mahasiswa.tampil', compact('mahasiswa'));
    }

    public function tambah()
    {
        $prodi = Prodi::get();
        // SELECT * FROM prodi
        return view('mahasiswa.tambah', compact('prodi'));
    }

    public function simpan(Request $request)
    {
        $validation = $request->validate([
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'prodi_id' => 'required'
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->fill($request->all());
        $simpan = $mahasiswa->save();

        if($simpan) {
            return redirect()->back()->withSuccess("Data berhasil disimpan");
        } else {
            return redirect()->back()->withError("Data gagal disimpan");
        }
    }
}