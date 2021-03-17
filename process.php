<?php
  include("koneksi.php");
  session_start();
  $id_user=$_SESSION['id'];
  //session
  if($_SERVER["REQUEST_METHOD"]==="POST"){
  $text1=$_POST['text1'];
  $qry="INSERT INTO status VALUES ('','$id_user','$text1')";
  if(mysqli_query($db,$qry)){
    echo "Record have been saved...";
  }else{
    echo "Not Saved";
  }
  header('location:page.php');
  }

?>
