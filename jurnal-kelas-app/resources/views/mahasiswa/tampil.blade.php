<html>
    <head>
        <title>Jurnal Kelas</title>
    </head>
    <body>
        <h1>Aplikasi Jurnal Kelas</h1>
        <h3>Data Mahasiswa</h3>
        <div class="add-button">
            <a href="/mahasiswa/tambah">
                <button>Tambah Data</button>
            </a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Status</th>
                    <th class="action-colum">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $val)
                <tr>
                    <td>{{ $val->nim }}</td>
                    <td>{{ $val->nama_lengkap }}</td>
                    <td>{{ $val->jenis_kelamin }}</td>
                    <td>{{ $val->prodi->nama_prodi }}</td>
                    <td>{{ $val->aktif }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $val->mahasiswa_id }}">Edit</a>
                        <a href="#hapus">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>