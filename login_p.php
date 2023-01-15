<?php
  session_start();
  
  include("koneksi.php");
  
  $mail = $_POST["email"];
  $pass = $_POST["pass"];
  
  $sql = "SELECT * FROM data_siswa WHERE usr = '$mail'";
  $query = mysqli_query($db,$sql);
  $data = mysqli_fetch_assoc($query);
  
  $_SESSION["usrna"] = $data["usr"];
  $_SESSION["passw"] = $data["pass"];
  if (isset($_SESSION["usrna"])) {
    header("Location:index.php");
  }
  
?>