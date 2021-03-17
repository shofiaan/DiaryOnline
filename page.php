<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}else{
  $username=$_SESSION['username'];
} ?>

<html>
<link rel="icon" type="image/png" href="gambar/logo.png">
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="page.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
</head>
<body>
<!-- header -->

<header class="primary-header container group">

        <h1 class="logo">
        <a href="index.php">Speak Up</a>
        </h1>
        <img width="70px" height="70px" align="right"style="margin-top: 45px;border-radius:50%;"src="gambar/<?php
        echo $_SESSION['gambar'];
        ?>">
        <nav class="nav primary-nav" align="right" style="margin-top:130px">
                <a href="index.php">Home</a>
                <a href="akun.php">My Diary</a>
                <a href="logout.php">Sign Out</a>
        </nav>

</header>


<div id="wrapper">

	<form id="paper" method="post" action="process.php">
		<textarea name="text1" placeholder="Say Your Mind." id="text" rows="4" type="text" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>
		<br>
		<input id="button" type="submit" name="submit" value="Add Record" style="margin-top:-40px">
	</form>
<br>
<?php
  $con = mysqli_connect("localhost", "root", "", "sosmed");
  //sql
  $sql = "SELECT user,mind from status, login where iduser=id";
  //jalanin sql
  $res = mysqli_query($con, $sql);
    $tgl=date('l,   d-m-Y');

  //ambil data dari query
  //while karena while ngebaca baris per baris.
  //mysqli_fetch_assoc = ambil data dari query, dalam bentuk array associaion
  while($row = mysqli_fetch_assoc($res)) {
    echo "
    <div class=''>
      <p><h5>".$row['user']." , $tgl;</h5> 
      ".$row['mind']."</p>
    </div>
    ";
  }
 ?>

          <footer class="primary-footer container group">

                  <small>&copy; Speak Up Indonesia</small>

                  <nav class="nav">
                    <a href="index.php">Home</a>
                    <a href="page.php">Public Diary</a>
                    <a href="logout.php">Sign Out</a>
                  </nav>

          </footer>

</div>
</html>
