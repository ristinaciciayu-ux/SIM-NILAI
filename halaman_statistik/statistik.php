<?php 
require("koneksi_db.php");

$query_jml_fai = "SELECT fakultas.nama_fakultas, COUNT(mahasiswa.mahasiswa_id)
                    AS jumlah_mhs
                    FROM mahasiswa
                    JOIN prodi ON mahasiswa.prodi_id=prodi.prodi_id
                    LEFT JOIN fakultas ON prodi.fakultas_id=fakultas.fakultas_id
                    WHERE fakultas.fakultas_id=1";

 $hasil_fai= $koneksi->query($query_jml_fai);
 $hasil_fai= mysqli_fetch_assoc($hasil_fai);
 $koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Statistik</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background: #f2f2f2;">
    <div class="container">
        <h3 class="text-center">Halaman Statistik</h3>
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Mahasiswa FAI</h5>
                        <p><?php echo $hasil_fai['jumlah_mhs']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Mahasiswa FIP</h5>
                        <p>0</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                       <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Prodi</th>
                                <th>Fakultas</th>
                                <th>Jumlah Mahasiswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PTI</td>
                                <td class="text-center">FIP</td>
                                <td class="text-center">80</td>
                            </tr>
                        </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>