@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Tambah Nilai Kelas {{ $kelas }}</h2>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-header text-white" style="background-color: #445ebf;">
            <strong>Form Tambah Nilai</strong>
        </div>

        <div class="card-body">
            <form action="{{ route('guru.nilai.store', ['kelas' => $kelas]) }}" method="POST">
                @csrf
                <table class="table table-bordered table-hover align-middle mb-0">
                    <tbody>
                        <tr>
                            <th class="text-center" style="width: 200px;">NIS</th>
                            <td>
                                <input type="text" name="nis" class="form-control" value="{{ old('nis') }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">Nama Siswa</th>
                            <td>
                                <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">Mata Pelajaran</th>
                            <td>
                                <input type="text" name="mapel" class="form-control" value="{{ old('mapel') }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">Tugas</th>
                            <td>
                                <input type="number" name="tugas" class="form-control" value="{{ old('tugas') }}">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">PTS</th>
                            <td>
                                <input type="number" name="pts" class="form-control" value="{{ old('pts') }}">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">PAS</th>
                            <td>
                                <input type="number" name="pas" class="form-control" value="{{ old('pas') }}">
                            </td>
                        </tr>
                        <tr>
                            <!-- <th class="text-center">Nilai Akhir</th>
                            <td>
                                <input type="number" step="0.01" name="nilai_akhir" class="form-control" value="{{ old('nilai_akhir') }}">
                            </td>
                        </tr> -->
                    </tbody>
                </table>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                    <a href="{{ route('guru.nilai.index', ['kelas' => $kelas]) }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
