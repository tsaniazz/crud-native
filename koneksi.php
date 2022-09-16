<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_native";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "gagal koneksi: " . mysqli_connect_error();
}

// echo "terhubung !";

?>