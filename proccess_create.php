<?php

require 'DB.php';

   
    $judul = $_POST['judul'];
    $kodebuku = $_POST['kodebuku'];
    $pengarang = $_POST['pengarang'];

    $result = mysqli_query($con, "INSERT INTO perpusguru (judul, kodebuku, pengarang) VALUES ('$judul', '$kodebuku', '$pengarang')");

if ($result) {
    echo "<script>alert('Data Berhasil di SIMPAN'); window.location='index.php';</script>";
}
?>