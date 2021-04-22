<?php
	$buka=fopen("datatabung.txt", "r");
	while (!feof($buka)){
		$baris=fgets($buka);
		$bagian=explode(",",$baris);
		$phi= 22/7;
		$jarijari= $bagian[1];
		$tinggi= $bagian[2];
		$hasil= 2*$phi*$jarijari*($jarijari+$tinggi);
	
	echo "Luas Tabung" .$bagian[0]. "dengan diameter" .$bagian[1].
	"dan tinggi".$bagian[2]. "adalah" .$hasil. "satuan luas<br>";
}
fclose($buka);
?>