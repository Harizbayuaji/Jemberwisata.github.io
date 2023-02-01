<?php
include './koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];



$login = mysqli_query($db, "select * from user where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);


if ($cek > 0) {
    while ($i = mysqli_fetch_array($login)) {
        session_start();
        $_SESSION['user'] = $i['role'];
        $_SESSION['id_user'] = $i['id_user'];

        if ($i['role'] == "admin") {
            header("location: ../dashboard.php");
        }
        else if ($i['role'] == "user") {
            header("location: ../user.php");
        }
    }
} else {
    header("location: ../index.php");
}