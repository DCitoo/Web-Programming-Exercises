<?php

//baca kedua bilangan
$bil=$_POST['bil1'];
$bil2=$_POST['bil2'];

//proses perhitungan
if(isset($_POST['penjumlahan'])){
	echo $bil1 + bil2;
}else if (isset($_POST['pengurangan'])){
	echo $bil1 - $bil2;
}else if (isset($_POST['perkalian'])){
	echo $bil1 * $bil2;
}else if (isset($_POST['pembagian'])){
	echo $bil1 / $bil2;
}else if (isset($_POST['pengkat'])){
	echo $bil1 ^ bil2;
}

?>