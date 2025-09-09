<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // Menampilkan daftar nilai berdasarkan kelas
    public function index($kelas)
    {
        $nilai = Nilai::where('kelas', $kelas)->get();
        return view('guru.nilai.index', compact('nilai', 'kelas'));
    }

    // Form tambah nilai
    public function create($kelas)
    {
        return view('guru.nilai.create', compact('kelas'));
    }

    // Simpan nilai
    public function store(Request $request, $kelas)
    {
        $request->validate([
            'nis'        => 'required|string|max:20',
            'nama_siswa' => 'required|string|max:100',
            'mapel'      => 'required|string|max:100',
            'tugas'      => 'nullable|integer|min:0|max:100',
            'pts'        => 'nullable|integer|min:0|max:100',
            'pas'        => 'nullable|integer|min:0|max:100',
        ]);

        // Hitung nilai akhir otomatis
        $tugas = $request->tugas ?? 0;
        $pts   = $request->pts ?? 0;
        $pas   = $request->pas ?? 0;

        $nilai_akhir = ($tugas * 0.3) + ($pts * 0.3) + ($pas * 0.4);

        Nilai::create([
            'nis'        => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas'      => $kelas,
            'mapel'      => $request->mapel,
            'tugas'      => $tugas,
            'pts'        => $pts,
            'pas'        => $pas,
            'nilai_akhir'=> $nilai_akhir,
        ]);

        return redirect()->route('guru.nilai.index', ['kelas' => $kelas])
                         ->with('success', 'Data nilai berhasil ditambahkan.');
    }

    // Form edit nilai
    public function edit($kelas, $id)
    {
        $n = Nilai::where('kelas', $kelas)->findOrFail($id);
        return view('guru.nilai.edit', ['nilai' => $n, 'kelas' => $kelas]);
    }

    // Update nilai
    public function update(Request $request, $kelas, $id)
    {
        $request->validate([
            'nis'        => 'required|string|max:20',
            'nama_siswa' => 'required|string|max:100',
            'mapel'      => 'required|string|max:100',
            'tugas'      => 'nullable|integer|min:0|max:100',
            'pts'        => 'nullable|integer|min:0|max:100',
            'pas'        => 'nullable|integer|min:0|max:100',
        ]);

        $tugas = $request->tugas ?? 0;
        $pts   = $request->pts ?? 0;
        $pas   = $request->pas ?? 0;

        $nilai_akhir = ($tugas * 0.3) + ($pts * 0.3) + ($pas * 0.4);

        $n = Nilai::where('kelas', $kelas)->findOrFail($id);
        $n->update([
            'nis'        => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'mapel'      => $request->mapel,
            'tugas'      => $tugas,
            'pts'        => $pts,
            'pas'        => $pas,
            'nilai_akhir'=> $nilai_akhir,
        ]);

        return redirect()->route('guru.nilai.index', ['kelas' => $kelas])
                         ->with('success', 'Data nilai berhasil diperbarui.');
    }

    // Hapus nilai
    public function destroy($kelas, $id)
    {
        $n = Nilai::where('kelas', $kelas)->findOrFail($id);
        $n->delete();

        return redirect()->route('guru.nilai.index', ['kelas' => $kelas])
                         ->with('success', 'Data nilai berhasil dihapus.');
    }
}
