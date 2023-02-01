<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($db, "UPDATE dt_table set role='Diterima' WHERE id='$id'");
header("location: ../table.php");