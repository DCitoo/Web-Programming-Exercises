<?php

//Cek sudah pernah login atau belum
	if(!isset($_COOKIE['namauser'])) {
		header("Location:form.html");
}
//Jika sudah pernah
	elseif (isset($_COOKIE['namauser'])) {
	$nama = $_COOKIE['namauser'];
		echo "<p>Halloo ".$nama.", Sudah siap untuk bermain lagi....</p>";
		echo "
  <form action='game.php'>
      <input type='submit' value='Start Game'/>
  </form>
  <p>Bukan Anda ? <a href='logout.php'>(klik disini)</a></p>
  ";
}

?>