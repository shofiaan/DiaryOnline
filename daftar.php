<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<html>
<head>
<title>Speak Now Indonesia</title>
<link rel="icon" type="image/png" href="gambar/logo.png">
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>


h1, h3, h4, h5, p {
        margin-bottom: 22px;
}



h1 {
        color: silver;
        font-family: 'Charm';
        font-size: 36px;
        line-height: 44px;
}
img{
  width: 100px;
  height: 70px;
  align: "middle";
}

body {
        background-image: url('pict/1.jpg');
        background-attachment:scroll;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}


#login {
  width: 100%;
  height: 100vh;
  margin-bottom: 200px;
}

.center {
  width: 350px;
  height: auto;
  margin: 0 auto;
  margin-top: 100px;
  background-color:rgba(5,5,5,0.8);
  box-shadow: 2px 2px 16px 0px #757575;
  padding: 40px;
}

.center h2 {
  font-size: 40px;
  text-align: center;
  color: #fff;

}

.fl {
  width: 100%;
}

.itpw {
  width: 92%;
  padding: 13px 10px;
  margin: 5px 0px;
  background-color: #dbdbdb;
  border: 3px solid #dbdbdb;
  color: #757575;
  transition: all 0.7s;
}

.its {
  width: 99.7%;
  font-size: 19px;
  color: #f5f5f5;
  padding: 12px;
  margin: 5px 0;
  background-color:#32CD32;
  border: none;
  transition: all 0.4s;
}

.itpw:focus {
  border-bottom: 3px solid #004d40;
  color: #004d40
}

.its:hover , .its:focus {
  opacity: 0.5;
  cursor: pointer;
}

.center p {
  margin: 20px 0;
  text-align: center;
  font-size: 14px;
}

.center p a {
  color: #757575;
}

  .its {
    width: 100%;
  }

  .itpw {
    font-size: 14px;
    width: 90%;
    padding: 13px 3%;
  }

  .center {
    width: 230px;
  }

  .center p {
    font-size: 12px;
  }

}

@media screen and (max-width:350px) {
  .center {
    padding: 20px;
    width: 75%;
  }
}
.primary-footer small {
        float: left;
        font-weight: 400;
}

.primary-footer {
        padding-bottom: 44px;
        padding-top: 44px;
        color: #648880;
        font-size: 14px;

}
.primary-footer small {
        float: left;
}


</style>
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
    <h2>Register</h2><br>

    <form class="fl " action="prosesdaftar.php" method="post" enctype="multipart/form-data">
      <input class="itpw" type="text" name="name" placeholder="Full Name"><br>
      <input class="itpw" type="text" name="phone" placeholder="Phone"><br>
      <input class="itpw" name="email" placeholder="email"><br>
      <input class="itpw" name="username" placeholder="Username"><br>
      <input class="itpw" type="password" id="password" name="password" placeholder="Password"><br>
      <input type="file" name="file">
      <input class="its" type="submit" name="login" value="Create" style="width:208px"><br>
    </form>

    <a href="login.php" ><p>Have an Account?</p></a>
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
</html>
