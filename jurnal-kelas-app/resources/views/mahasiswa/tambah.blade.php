<html>
    <head>
        <title>Jurnal Kelas</title>
    </head>
    <body>
        <h1>Aplikasi Jurnal Kelas</h1>
        <h3>Tambah Data Mahasiswa</h3>
        <div class="add-button">
            <a href="/mahasiswa">
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

        <form action="/mahasiswa/simpan" method="POST">
            @csrf
            <table>
                <tbody>
                    <tr>
                        <td>
                            <label>NIM</label>
                        </td>
                        <td>
                            <input type="text" name="nim" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nama Mahasiswa</label>
                        </td>
                        <td>
                            <input type="text" name="nama_lengkap" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Jenis Kelamin</label>
                        </td>
                        <td>
                            <select name="jenis_kelamin" requried>
                                <option value="">--Pilih--</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Program Studi</label>
                        </td>
                        <td>
                            <select name="prodi_id" requried>
                                <option value="">--Pilih--</option>
                                @foreach($prodi as $val)
                                <option value="{{$val->prodi_id}}">{{ $val->nama_prodi }}</option>
                                @endforeach
                            </select>
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