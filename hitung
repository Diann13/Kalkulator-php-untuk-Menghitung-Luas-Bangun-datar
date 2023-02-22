<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$bangun_datar = $_POST["bangun_datar"];

	switch ($bangun_datar) {
		case "bujur_sangkar":
			$judul = "Bujur Sangkar";
			$keterangan = "Masukkan sisi:";
			break;
		case "persegi_panjang":
			$judul = "Persegi Panjang";
			$keterangan = "Masukkan panjang dan lebar:";
			break;
		case "lingkaran":
			$judul = "Lingkaran";
			$keterangan = "Masukkan jari-jari:";
			break;
		case "segitiga":
			$judul = "Segitiga";
			$keterangan = "Masukkan alas dan tinggi:";
			break;
		default:
			header("location: index.php");
			exit;
	}
}
else {
	header("location: index.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
	<h1>Kalkulator Luas <?php echo $judul; ?></h1>
	<form action="hasil.php" method="post">
		<p><?php echo $keterangan; ?></p>
		<input type="number" name="nilai1" required>
		<?php
		if ($bangun_datar == "persegi_panjang") {
			echo '<input type="number" name="nilai2" required>';
		} 
		if ($bangun_datar == "segitiga") {
			echo '<input type="number" name="nilai2" required>';
		} 
		?>
		<br><br>
		<input type="hidden" name="bangun_datar" value="<?php echo $bangun_datar; ?>">
		<input type="submit" value="Hitung">
	</form>
</body>
</html>
