<?php
	
	$bolpoint	= 1750;
	$qty		= $_POST['qty'];
	$uang 		= $_POST['uang'];
	if (isset($_POST['submit'])) {
		$qty		= $_POST['qty'];
		$uang 		= $_POST['uang'];
		$hasil		= $qty * $bolpoint;
		$kembalian	= $uang - $hasil;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soal No. 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="" method="post">
		<input type="text" name="qty" placeholder="qty">
		<input type="text" name="uang" placeholder="jumlah uang">
		<button type="submit" name="submit">hitung</button>
	</form>

	<h3>Harga Bolpoint : Rp. 1,750 /pcs</h3>
	<h3>Qty            : <?= $qty; ?></h3>
	<h3>Uang           : <?= $uang; ?></h3>
	<h3>Kembalian      : <?= number_format($kembalian); ?></h3>

</body>
</html>