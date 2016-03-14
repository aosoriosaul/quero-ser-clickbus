<head>
	<title>Examen Cash machine</title>
</head>
<body>
	<H1>RETIRO CAJERO AUTOMATICO</H1>
	<?php
	
		
		// elseif ($efectivo >=50)
		// {
			// echo "La cantidad de 50"
		// }
		// elseif ($efectivo >=20)
		// {
			// echo "Cantidad de 20"
		// }
		// else
		// {
			// echo "La cantidad a retirar debe ser multiplos de 100,50,20"
		// }
		for ($cuenta=1;$cuenta<=4;$cuenta++)
		{
			if ($_POST["efectivo"] >= 100)
			{
				echo "Billete de 100: " .
				$hundred = floor ($_POST["efectivo"]/100);
				// // $hundred=$efectivo
				$_POST["efectivo"]=$_POST["efectivo"]-($hundred*100);
				// // <!--floor ($hundred/100)-->
				//echo $hundred;			
			}
			elseif ($_POST["efectivo"]>=50)
			{
				echo "<br>Billete de 50: " .
				$half_hundred = floor ($_POST["efectivo"]/50);
				$_POST["efectivo"]=$_POST["efectivo"]-($half_hundred*50);
			}
			elseif ($_POST["efectivo"]>=20)
			{
				echo "<br>Billete de 20:" .
				$tweenty = floor ($_POST["efectivo"]/20);
				$_POST["efectivo"]=$_POST["efectivo"]-($tweenty*20);
			}
			elseif ($_POST["efectivo"]<=19 AND $_POST["efectivo"]>=1)
			{
				echo "<br><H2>No se puede entregar la cantidad de " . $_POST["efectivo"] . " ya que es necesario que sean multiplos de 20,50,100<H2>";
			}
		}
	?>
	<br>
	</FORM>
</body>
</html>
