<?php
//
        $nama=$_POST['nama'];
        $data=$_POST['data'];
        $tanggal=date("h:i:s");
        $buka=fopen("datamhs.txt",'a');
		fwrite($buka,"nim : ${nim} <br> ");
		fwrite($buka,"nama : ${nama} <br> ");
		fwrite($buka,"tgllhr : ${tgllhr} <br> ");
		fwrite($buka,"tmptlhr : ${tmptlhr} <br> ");
		fwrite($buka,"<hr>");
		fclose($buka);
        print "data berhasil disimpan";
 ?>
