<?php
include "dbconfig.php";
session_start();

$nama = $_COOKIE['namauser'];

//Lives dan scoring
if(!isset($_SESSION['lives']) && !isset($_SESSION['score'])){
  $_SESSION['lives'] = 5;
  $_SESSION['score'] = 0;
}

//Play game
if(!isset($_SESSION['Jawaban'])){
  $_SESSION['A'] = rand(0,20);
  $_SESSION['B'] = rand(0,20);
  $_SESSION['Jawaban'] = $_SESSION['A'] + $_SESSION['B'];
 echo "Hello ".$nama.", tetap semangat ya… you can do the best!!";
  echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
  echo "
  <form method='post' action='game.php'>
    Berapa hasil dari ".$_SESSION['A']." + ".$_SESSION['B']." = <input type='text' name='tebakan'>
    <input type='submit' name='submit' value='Submit'>
  </form>
  ";
}
//Cek benar atau salah, dan jawaban
if (isset($_POST['submit']) && isset($_SESSION['Jawaban'])){
  $tebakan = $_POST['tebakan'];
  //Jika tebakan benar
  if($tebakan == $_SESSION['Jawaban']){
    $_SESSION['score'] += 10;
    echo "Hallo ".$nama.", selamat jawaban Anda benar";
    echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
    unset($_SESSION["Jawaban"]); //Unset jawaban
    echo "
    <form action='game.php'>
        <input type='submit' value='Soal selanjutnya'/>
    </form>
    ";
  }


//Jika jawaban salah
  elseif ($tebakan != $_SESSION['Jawaban']) {
    $_SESSION['score'] -= 2;
    $_SESSION['lives'] -= 1;
	
	
//Lives habis = Game Over
    if ($_SESSION['lives'] <= 0){
      echo "Haloo ".$nama."..  Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.";
      echo "<br>Score Anda: ".$_SESSION['score']."";

//input data ke database
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
      if ($conn->connect_error){
        die("Koneksi database hall of fame gagal: " . $conn->connect_error);
      } else {
		//Sql query input data
        $score = $_SESSION['score'];
        $query = "INSERT INTO `datagame`(`nama`, `score`) VALUES (`nama`,`score`)";
        //Sql query run
        $result = $conn->query($query);
        //cek state query result
        if(!$result){
          echo "Insert data ke database hall of fame gagal!";
        }
      }

session_destroy();
      echo "
      <form action='cek.php'>
          <input type='submit' value='Mulai Permainan Baru'/>
      </form><br>
      ";

     //Hall of Fame
      echo "<h2>Hall of Fame</h2>";
      $query = "SELECT `nama`, `score` FROM `datagame` ORDER BY `score` DESC";
      $result = $conn->query($query);
	  
	  //Cek ada hasil atau tidak
      if ($result->num_rows > 0){
        echo "<table border='1'>";
        echo "<tr><th>No</th><th>Nama</th><th>Score</th></tr>";
        $i = 1;
        //Menampilkan data
        while ($data = $result->fetch_assoc()){
          echo "<tr><td>".$i."</td><td>".$data['nama']."</td><td>".$data['score']."</td></tr>";
          $i++;
          if ($i > 10){
            break;
          }
        }
        echo "</table>";
      } else {
        echo "<p>Data Hall of Fame tidak ditemukan!</p>";
      }

	$conn->close();
	}
	
	 //Jika lives masih tersisa tapi jawaban salah
    else {
      echo "Hello ".$nama.", sayang jawaban Anda salah… tetap semangat ya !!!";
      echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
      unset($_SESSION["Jawaban"]); //Unset jawaban
      echo "
      <form action='game.php'>
          <input type='submit' value='Soal selanjutnya'/>
      </form>
      ";
    }
  }
}

	
?>