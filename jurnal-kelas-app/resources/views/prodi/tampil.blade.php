<html>
    <head>
        <title>Jurnal Kelas</title>
    </head>
    <body>
        <h1>Aplikasi Jurnal Kelas</h1>
        <h3>Data Program Studi</h3>
        <div class="add-button">
            <a href="/prodi/tambah">
                <button>Tambah Data</button>
            </a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prodi</th>
                    <th>Nama Pendek</th>
                    <th class="action-colum">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prodi as $val)
                <tr>
                    <td>{{ $val->prodi_id }}</td>
                    <td>{{ $val->nama_prodi }}</td>
                    <td>{{ $val->nama_pendek }}</td>
                    <td>
                        <a href="/prodi/edit/{{ $val->prodi_id }}">Edit</a>
                        <a href="#hapus">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>