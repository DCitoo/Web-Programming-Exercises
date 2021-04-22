<?php

$nim= trim($_POST['nim']);
$nama= trim($_POST['nama']);
$tgllhr= trim($_POST['tgllhr']);
$tmptlhr= trim($_POST['tmptlhr']);
	
if ($nim== "")
{
echo "NIM belum terisi";
}
else if ($nama== "")
{
echo "Nama belum terisi";
}
else if ($tgllhr== "")
{
echo "Tanggal lahir belum terisi";
}
else if ($tmptlhr== "")
{
echo "Tempat lahir belum terisi";
}
else {
	$tgllhr=date('d-m-y');
	$datamhs=fopen("datamhs.txt","a");
	fwrite($datamhs,"nim : ${nim} <br> ");
	fwrite($datamhs,"nama : ${nama} <br> ");
	fwrite($datamhs,"tgllhr : ${tgllhr} <br> ");
	fwrite($datamhs,"tmptlhr : ${tmptlhr} <br> ");
	fwrite($datamhs,"<hr>");
	fclose($datamhs);
	
	print "Data Berhasil Disimpan";
	include"tambahdata.html";
	}
	
?>
