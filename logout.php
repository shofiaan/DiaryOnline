<?php
   session_start();
   session_destroy();
   header('location:index.php');
?>

<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="login.php">disini</a> untuk login kembali
</div>
