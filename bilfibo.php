<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Bilangan Fibonacci</title>
</head>

<body>

	<header id="header-top">
			<h1>DERET BILANGAN FIBONACCI</h1>
		</header>

	<?php

		$angka_pertama = 0;
		$angka_terakhir = 1;

		echo "Angka Pertama : $angka_pertama";
		echo "<br>";
		echo "<br>";


		echo "Angka Terakhir : $angka_terakhir";
		echo "<br>";
		echo "<br>";

		
		echo "Deret Selanjutnya";
		echo "<br>";

		for ($i=0; $i<10; $i++){
		echo "<br>";
		$hasil = $angka_terakhir + $angka_pertama;

		echo "$hasil";

		$angka_pertama=$angka_terakhir;
		$angka_terakhir=$hasil;

		//echo"$hasil";
	}
	?>

</body>
</html>



