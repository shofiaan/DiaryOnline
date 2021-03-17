<?php
   require_once("koneksi.php");
   $name= $_POST['name'];
   $phone= $_POST['phone'];
   $email= $_POST['email'];
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM login WHERE user = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $filename = $_FILES['file']['name'];
       $temp_name= $_FILES['file']['tmp_name'];
       if (isset($filename)){
         $dir="gambar/";
         move_uploaded_file($temp_name, $dir.$filename);
       }
       $data = "INSERT INTO login VALUES (NULL, '$name', '$phone', '$email', '$filename', '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
          header('location:login.php');
       } else {
          header('location:daftar.php');
       }
     }
   }
?>
