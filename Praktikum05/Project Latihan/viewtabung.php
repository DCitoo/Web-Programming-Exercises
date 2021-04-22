<html>
<table border = "2">
<h3>Data Ukuran Tabung</h3>
	<tr>
		<td>Nama Tabung</td>
		<td>Diameter</td>
		<td>Tinggi</td>
		<td>Luas</td>
	</tr>

<?php
//baca file
$buka=fopen("datatabung.txt", "r");
while (!feof($buka)){
	$baris=fgets($buka);
	$bagian=explode(",",$baris);
	echo "<tr><td>$bagian[0]</td>
	<td>$bagian[1]</td>
	<td>$bagian[2]</td>
	<td><a href=hitungluas.php>view</a></td>
	</tr>";
}
fclose($buka);

?>
</table>
</html>