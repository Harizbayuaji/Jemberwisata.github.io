<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;
$tanggal = date("Y-m-d H:i:s");
$role = 'Menunggu';

mysqli_query($db, "insert into dt_table value('$kode_ticket','$nama','$email' ,'$harga', $jumlah, $total ,'$tanggal', '$role')");
header('location: ../table.php');