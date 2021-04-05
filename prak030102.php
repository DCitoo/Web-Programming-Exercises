<?php
function  buatBintang ($n) {
		echo "<pre>";
		for ($i=0; $i<$n;$i++) {
			for ($j=0;$j<($n+$i-$n+1);$j++){
				echo "*";
			}
				echo "\n";
		}
		echo "</pre>";
	}
buatBintang(4);
buatBintang(5);
?>