<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$role = $_POST['role'];


mysqli_query($db, "UPDATE dt_table SET nama='$nama', email='$email', harga='$harga', jumlah='$jumlah', role='$role' WHERE kode_ticket='$'");
header("location:../table.php");
