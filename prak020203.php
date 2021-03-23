<?php
$baris = 4;
$kolom = 5;
$no = 0;
echo "<table border=1>";
	for($i=1;$i<=$baris;$i++){
	echo "<tr>";
	for($j=1;$j<=$kolom;$j++)
		if ($no++ %2==0){
		echo "<td style=color:white;background:red;>$no </td>";}
		else {echo "<td style=color:red;>$no</td>";}
	echo "</tr>";}
echo "</table>";
?>