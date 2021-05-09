<?php

//paramater koneksi ke DB
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game";
$dbport = "3306";

//koneksi dengan lib mysqli style PBO
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);
//cekk koneksi 
if($conn->connect_error){
	die("Koneksi gagal: " . $conn->connect_error);
}else {
	echo "";
}


//menutup koneksi
$conn->close();

?>