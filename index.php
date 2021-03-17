<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}else{
  $username=$_SESSION['username'];
}


require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'shofiamumtazah16@gmail.com';
$mail->Password = 'malaysia2020';
$mail->SetFrom('no-reply@speakup.org');
$mail->Subject = 'Hello Opi';
$mail->Body = 'Test Mail';
$mail->AddAddress('shofialaurence@gmail.com');

$mail->Send();

?>
<html>

<head>
        <meta charset="utf-8">
        <title>Speak Up Indonesia</title>
				<link rel="icon" type="image/png" href="gambar/logo.png">
				<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
</head>
<body>

<!-- header -->

        <header class="primary-header container group">

                <h1 class="logo">
                        <a href="index.php">Speak Up</a>
                </h1>

                <h3 class="tagline">Cikarang, 11 December 2019</h3>

                <nav class="nav primary-nav">
                        <a href="index.php">Home</a>
                        <a href="page.php">Public Diary</a>
                        <a href="akun.php">My Diary</a>
                        <a href="logout.php">Sign Out</a>
                </nav>

        </header>

<!-- Main -->

        <section class="main container">
            <h1 style="text-transform:uppercase;">Welcome <?php echo $_SESSION['username'] ?></h1>
                <h2>“Emotions is Part of Human”</h2>

                <p>Maybe most of people think that Posting your emotions is really fool, but who realize that
                by uploading it we can feel better and lost of pain weight?? Just Try.!</p>

                <a class="btn btn-alt" href="page.php">Write Now.!</a>

        </section>
        <section class="row">
                <h2>About The Creator</h2>
                <div class="grid">
                    Hello, I'm Shofia. My Hometown is in Tasikmalaya. I made this Application For anyone who want to speak up their minds, Their Emotion
                    by writing anything that they felt as unknown and people dont know who is your name and where do you come from.
                    Let's Enjoy it.!
                    It will be develop later...See ya.
                </div>

        </section>

<!-- Footer -->

        <footer class="primary-footer container group">

                <small>&copy; Speak Up</small>

                <nav class="nav">
                  <a href="index.php">Home</a>
                  <a href="page.php">Public Diary</a>
                  <a href="logout.php">Sign Out</a>
                </nav>

        </footer>

</body>

</html>
