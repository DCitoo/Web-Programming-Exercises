<?php

setcookie("namauser", " ", time()-3600, "/");
setcookie("emailuser", " ", time()-3600, "/");

//kembali ke index.php

header("Location:index.php");


?>