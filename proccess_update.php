<?php

include('DB.php');

$id = $_POST['id'];
$judul = $_POST['judul'];
$kodebuku = $_POST['kodebuku'];
$pengarang = $_POST['pengarang'];

$query = "UPDATE perpusguru SET judul = '$judul', kodebuku = '$kodebuku', pengarang = '$pengarang'";

$query .= "WHERE id = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>alert('Data Berhasil di UBAH'); window.location='index.php';</script>";
}
?>