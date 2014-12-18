<?php
	include "../config/koneksi.php";

	print_r($_POST); // tampil sebagai respon. lihat di console karena respon ditampilakn melalui console

	$id_test1 = $_POST['id_tes1'];
	$total = $_POST['total'];
	for($i=0; $i < count($id_test1); $i++){
		$sql = "INSERT INTO `tes2`(`id_tes1`, `total`) VALUES ('$id_tes1[$i]','$total[$i]')";
		$q = mysql_query($sql);
	}
?>