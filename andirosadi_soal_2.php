<h1>PROGRAM ANGKA GANJIL GENAP</h1>
<form action="" method="post">
	<input type="text" name="angka" placeholder="Masukkan Angka">
	<input type="submit" name="submit" value="submit">
</form>

<?php 	

	if (isset($_POST['submit'])) {
		
		$angka = isset($_POST['angka']) ? $_POST['angka'] : '';
		
		if($angka % 2 == 0) {

			$hasil = $angka . '.' . ' Bilangan Genap';

			echo $hasil;

		}elseif($angka % 2 != 0){

			echo $angka . '.' . ' Bilangan Ganjil';

		}else{

			null;
		}
	}
	

?>

