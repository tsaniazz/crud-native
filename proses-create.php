<?php

include 'koneksi.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO users VALUES('', '$nama', '$alamat')");

    header("location:read.php");

?>