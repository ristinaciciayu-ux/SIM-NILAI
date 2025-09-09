<?php
    $books = [
        "Panduan Belajar PHP untuk pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Pemrogaman Web dengan HTML",
        "E-Commerce Menggunakan PHP",
    ];

    echo "<h5>Judul Buku Komputer:</h5>";
    echo "<ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";
    }
    echo "</ul>";
    ?>
