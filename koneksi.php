<?php
$hostname  = "localhost";
$username  = "root";
$password  = "";
$dbname  = "login";
$db = mysqli_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
mysqli_select_db($db,$dbname);
?>