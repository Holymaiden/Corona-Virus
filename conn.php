<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corona_virus";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
        die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
