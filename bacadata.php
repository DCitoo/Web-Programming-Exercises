<html>
<h1>Data Mahasiswa</h1>
<label>Jumlah data:...</label>
<table border ="1">
<tr>
	<td>No</td>
	<td>NIM</td>
	<td>Nama Mhs</td>
	<td>Tanggal Lahir</td>
	<td>Tempat Lahir</td>
	<td>Usia (Thn)</td>
</tr>

<?php
$nomor=0;
$filemhs=fopen("datamhs.txt","r");
while(!feof($filemhs)){
	$nomor++;
	$barisdata=fgets($filemhs);
	$bagian=explode("|",$barisdata);
	$usia=new datetime($bagian[2]);
	$hrini=new datetime();
	$diff=$usia->diff($hrini);
	echo "<tr>
			<td>$nomor</td>
			<td>$bagian[0]</td>
			<td>$bagian[1]</td>
			<td>$bagian[2]</td>
			<td>$bagian[3]</td>
			<td>$diff->y</td>
		</tr>";
		}
	fclose($filemhs);
?>
<?php
	echo "jumlah data=$nomor";
?>

</table>
</html>
