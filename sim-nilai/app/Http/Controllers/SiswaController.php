<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Tampilkan daftar siswa dengan pagination dan search.
     */
    public function index(Request $request)
    {
        // Ambil keyword search dari query string
        $search = $request->input('search');

        // Query dasar
        $query = Siswa::query();

        // Jika ada keyword search, filter berdasarkan nama_siswa
        if ($search) {
            $query->where('nama_siswa', 'like', "%{$search}%");
        }

        // Ambil data dengan pagination 10 per halaman, urut berdasarkan nama
        $siswas = $query->orderBy('nama_siswa')->paginate(10);

        // Agar keyword search tetap ada di URL saat pindah halaman
        $siswas->appends(['search' => $search]);

        return view('admin.data_siswa.index', compact('siswas'));
    }

    /**
     * Form tambah siswa.
     */
    public function create()
    {
        return view('admin.data_siswa.tambah_siswa');
    }

    /**
     * Simpan data siswa baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswas',
            'nama_siswa' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlpn' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('admin.data_siswa.index')
                         ->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Form edit siswa.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.data_siswa.edit_siswa', compact('siswa'));
    }

    /**
     * Update data siswa.
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:siswas,nis,'.$siswa->id,
            'nama_siswa' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlpn' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('admin.data_siswa.index')
                         ->with('success', 'Data siswa berhasil diperbarui');
    }

    /**
     * Hapus data siswa.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.data_siswa.index')
                         ->with('success', 'Data siswa berhasil dihapus');
    }
}
