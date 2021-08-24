<?php
include('DB.php');

$id = $_GET['id'];
$query = "DELETE FROM perpusguru where id = '$id'";
$result = mysqli_query($con, $query);
if (!$result) {
    die("Query Error " . mysqli_errno($cnn) . " - " . mysqli_error($con));
} else {
    echo "<script>alert('Data Berhasil di HAPUS'); window.location='index.php';</script>";
}