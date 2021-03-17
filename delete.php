<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($db,"DELETE FROM status WHERE idstt='$id'");
header("location:akun.php");
?>
