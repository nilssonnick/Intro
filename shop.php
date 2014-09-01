<html>
	<head>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			$noApple = $_POST['Apple'];
			$noBanana = $_POST['Banana'];
			$noMango = $_POST['Mango'];
			$noOrange = $_POST['Orange'];
			
			$prisApple = $noApple * 10;
			$prisBanana = $noBanana * 8;
			$prisMango = $noMango * 25;
			$prisOrange = $noOrange * 12;
			$prisTotal = $prisApple + $prisBanana + $prisMango + $prisOrange;
			$moms = $prisTotal * 0.08;
			
			echo "Antal äpplen: " . $noApple; ?> pris: <?php echo $prisApple . ":-"; ?> <br  />
		<?php	echo "Antal bananer: " . $noBanana;?> pris: <?php echo $prisBanana . ":-"; ?> <br  />
		<?php	echo "Antal mangos: " . $noMango; ?> pris: <?php echo $prisMango . ":-"; ?><br  />
		<?php	echo "Antal apelsiner: " . $noOrange; ?> pris: <?php echo $prisOrange . ":-"; ?><br  />
		
		<?php echo "Totalt: " . $prisTotal . ":-"; ?>  <br  /> 
		<?php echo "Moms: " . $moms . ":-"; ?>
		
		<?php
		
		?>
	</body>
</html>