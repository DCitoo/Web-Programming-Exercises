<html>
	<head>Headings</head><br>
	<body>
	<?php
		for($i=1;$i<=6;$i++)
		if($i%2==1){
			echo "<font color='black'<h".$i.">Heading".$i."</h".$i."></font><br>";}
		else {
			echo "<font color='red'<h".$i.">Heading".$i."</h".$i."></font><br>";}
	?>
	</body>
</html>