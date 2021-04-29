<?php
//angka acak yang dipilih
$acak =rand(1,5);

//bilnagan sudah submit dan ditebak
if (isset($_COOKIE ['submit'])){
	$angka = $_POST ('angka');
		if ($angka > $acak) echo "Hallo, nama saya Mr.PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!
		wahh, masih salah ya, bilangan tebakan Anda terlau TINGGI.";
	?>
		<form action= "menebak.php" method= "post">
		Bilangan tebakan Anda (<input type="nominal" name= "angka" />)
		<input type="Submit" />
	<?php
		}
elseif(!isset($_COOKIE['submit'])){
	$angka = $_POST ('angka');
	if ($angka < $acak) echo "Hallo, nama saya Mr.PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!
		wahh, masih salah ya, bilangan tebakan Anda terlau RENDAH.";
	?>
		<form action= "menebak.php" method= "post">
		Bilangan tebakan Anda (<input type="nominal" name= "angka" />)
		<input type="Submit" />
	<?php
		}
else( echo "SELAMAT..... Saya telah memilih bilngan ". $acak;
		echo"<p>Ulangi Permainan <a href='form_login.html'>Ulangi Permainan</a></p>';)

?>