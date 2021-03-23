<html>
	<head>Headings</head><br>
	<body>
		<?php
			$i=1;
			while($i<=6)if($i%2==1){
				echo "<font color='black'<h".$i.">Heading".$i."</h".$i."></font><br>";$i++;}
				else{echo "<font color='red'<h".$i.">Heading".$i."</h".$i."></font><br>";$i++;}
		?>
	</body>
</html>