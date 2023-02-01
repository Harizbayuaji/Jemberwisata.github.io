<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($db, "UPDATE dt_table set role='Ditolak' WHERE id='$id'");
header("location: ../table.php");