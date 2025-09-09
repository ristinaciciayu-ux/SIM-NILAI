<?php
    $namabarang = [
        ["1", "B001", "Mouse", "50000", 3],
        ["2", "B002", "Keyboard", "150000", 2],
        ["3", "B003", "Speaker", "300000", 3],
        ["4", "B004", "Printer", "1500000", 2]
    ];
?>

<html>
    <head>
        <title>Array 2 Dimensi</title>
    </head>
    <body>
        <h2><b><center>Tabel Harga Barang</center></b></h2>
        <center><table border="2"></center>
            <thead>
                <tr>
                    <td>NO</td>
                    <td>KODE</td>
                    <td>NAMA BARANG</td>
                    <td>HARGA</td>
                    <td>JUMLAH</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($namabarang as $baris){ ?>
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