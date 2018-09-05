<!DOCTYPE html>
<html>
<head>
	<title>Estudos PHP  - Estudo1</title>
</head>
<body>
	<?php
		$userName = "Guilherme";
		$date = date('d/m/Y');	
		$hour = date('h:i:s');	
	?>

	<div id="welcome">
		<p>Olá <?php echo $userName; ?></p>
		<p>Data: <?php echo $date; ?></p>
		<p>Hora: <?php echo $hour; ?></p>
	</div>
</body>
</html>