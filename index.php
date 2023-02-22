<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
	<h1>Kalkulator Luas Bangun Datar</h1>
	<form action="hitung.php" method="post">
		<p>Pilih bangun datar:</p>
		<label><input type="radio" name="bangun_datar" value="bujur_sangkar"> Bujur Sangkar</label><br>
		<label><input type="radio" name="bangun_datar" value="persegi_panjang"> Persegi Panjang</label><br>
		<label><input type="radio" name="bangun_datar" value="lingkaran"> Lingkaran</label><br>
		<label><input type="radio" name="bangun_datar" value="segitiga"> Segitiga</label><br>
		<br>
		<input type="submit" value="Hitung">
	</form>
</body>
</html>
