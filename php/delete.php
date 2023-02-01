
<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM dt_table WHERE id='$id'");

header("location: ../table.php?pesan=hapus");
?>