<html>
    <head>
        <title>Jurnal Kelas</title>
    </head>
    <body>
        <h1>Aplikasi Jurnal Kelas</h1>
        <h3>Tambah Data Program Studi</h3>
        <div class="add-button">
            <a href="/prodi">
                <button>Kembali</button>
            </a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/prodi/simpan" method="POST">
            @csrf
            <table>
                <tbody>
                    <tr>
                        <td>
                            <label>Nama Prodi</label>
                        </td>
                        <td>
                            <input type="text" name="nama_prodi" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nama Pendek</label>
                        </td>
                        <td>
                            <input type="text" name="nama_pendek" required>
                        </td>
                    </tr>
                    <tr>
                        <td cospan="2">
                            <button type="submit">Simpan</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </body>
</html>