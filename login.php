<!DOCTYPE html>
<html>
<head>
<?php
   session_start();
   if(isset($_SESSION['user'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
  <title>Speak Now Indonesia</title>
  <link rel="icon" type="image/png" href="gambar/logo.png">
  <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="masuk.css">


</head>
<header class="primary-header container group">

        <h1 class="logo">
                <a href="index.php">Sign In</a>
        </h1>

        <h3 class="tagline">Cikarang, 16 October 2019</h3>

        <nav class="nav primary-nav">
                <a href="index.php">Home</a>
                <a href="page.php">Write Now</a>
                <a href="login.php">Sign In</a>
        </nav>
</header>
<body>

<div id="login">
  <div class="center">
      <h2>Login Code User</h2>
      <br>
      <form class="fl " action="login.php" method="post">
        <input class="itpw" type="text" name="username" placeholder="Username" onkeyup="showHint(this.value)"><br>
        <input class="itpw" type="password" id="password" name="password" placeholder="Password" style=""><br>
        <input class="its" type="submit" name="login" value="LOGIN"><br>
      </form>
      <p>Suggestions: <span id="txtHint"></span></p>
      <a href="daftar.php"><p>Register</p></a>
  </div>
</div>
<footer class="primary-footer container group">

        <small>&copy; Speak Now Indonesia</small>

        <nav class="nav">
          <a href="index.php">Home</a>
          <a href="page.php">Write Now</a>
          <a href="login.php">Sign In</a>
        </nav>
</footer>

</body>

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();
}
</script>
<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql="SELECT * FROM login WHERE user = '$username' AND password='$password'";
   $cekuser = mysqli_query($db,$sql);
   $hasil = mysqli_fetch_array($cekuser);
   //0 data tak d temuka
   if(mysqli_num_rows($cekuser) == 0) {
     echo "
       <script type='text/javascript'>
         document.getElementById('password').style.boxShadow = '0px 0px 5px 5px #FF5555';
       </script>
     ";
   } else {
     session_start();
     echo $sql;
     $_SESSION['id'] = $hasil['id'];
     $_SESSION['username'] = $hasil['user'];
     $_SESSION['gambar'] = $hasil['gambar'];
     header('location:index.php');
   }
 }

 ?>
</html>
