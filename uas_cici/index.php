<?php

$dataMahasiswa = array(
    array(1,"2244201001", "NURUL HAMIDA", "C1"),
    array(2, "2244201002", "DENIX ARICHO SUNDAWA", "C1"),
    array(3,"2244201003", "SITI MARWIYAH", "C1"),
    array(4,"2244201004", "DEA YOGI NOPASA", "C1"),
    array(5, "2244201005", "FARHAN FADLY", "C1")
);
?>

<!DOCTYPE html>
<html>
<header>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ujian Akhir Semester</title>
        <link rel="stylesheet" href="uas.css">
        <p>UJIAN AKHIR SEMESTER</p>
    </header>
    
<body>
    <section>
        <thead>
        <div class="container">
        <style> text-align:left </style>
            <h3>Data Mahasiswa</h3>
            
    <center><table border="1"></center>

        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php foreach ($dataMahasiswa as $mahasiswa) : ?>
            <tr>
                <td><?php echo $mahasiswa[0]; ?></td>
                <td><?php echo $mahasiswa[1]; ?></td>
                <td><?php echo $mahasiswa[2]; ?></td>
                <td><?php echo $mahasiswa[3]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
        </br>

        </thead>
        </section>
       
        <footer>
    <div>
        <p>Copyright UAS PTI</p>
    </div>
    </footer>
</body>
</html>


