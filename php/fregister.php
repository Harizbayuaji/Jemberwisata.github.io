<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$role_id = "user";

mysqli_query($db, "insert into user value('$id','$nama', '$email' ,'$password','$role_id')");
header('location: ../login.php');