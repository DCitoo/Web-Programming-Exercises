<?php

if(!isset($_COOKIE["namauser"])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  setcookie("namauser",$nama,time()+3*3600,"/");
  setcookie("emailuser",$email,time()+3*3600,"/");
  header("Refresh:0");
}

if(!isset($_COOKIE["namauser"])) {
  header("Location:index.php");
}

?>