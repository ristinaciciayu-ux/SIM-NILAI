<?php
    $matakuliah = [
        ["MK001", "Pemrograman Web", 4],
        ["MK002", "Struktur Data", 2],
        ["MK003", "Machine Learning", 4]
    ];
?>

<html>
    <head>
        <title>Array 2 Dimensi</title>
    </head>
    <body>
        <h5>Matakuliah Program Studi Pendidikan Teknologi Informasi</h5>
        <table border="1">
            <thead>
                <tr>
                    <td>Kode MK</td>
                    <td>Matakuliah</td>
                    <td>Bobot</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($matakuliah as $baris){ ?>
                    <tr>
                        <?php foreach($baris as $kolom){ ?>
                        <td><?php echo $kolom; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>