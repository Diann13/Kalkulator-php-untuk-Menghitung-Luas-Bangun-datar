<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$bangun_datar = $_POST["bangun_datar"];
	$nilai1 = $_POST["nilai1"];

	switch ($bangun_datar) {
		case "bujur_sangkar":
			$luas = $nilai1 * $nilai1;
			break;
		case "persegi_panjang":
			$nilai2 = $_POST["nilai2"];
			$luas = $nilai1 * $nilai2;
			break;
		case "lingkaran":
			$luas = 3.14 * $nilai1 * $nilai1;
			break;
		case "segitiga":
			$nilai2 = $_POST["nilai2"];
			$luas = 0.5 * $nilai1 * $nilai2;
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
	<h1>Kalkulator Luas <?php echo $bangun_datar; ?></h1>
	<p>Luas <?php echo $bangun_datar; ?> dengan nilai yang dimasukkan adalah <?php echo $luas; ?> satuan luas.</p>
	<p><a href="index.php">Hitung kembali</a></p>
</body>
</html>
