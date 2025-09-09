<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "wisuda_data";

$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_errno) {
    die("Koneksi Error ".$koneksi->connect_error);
}

?>