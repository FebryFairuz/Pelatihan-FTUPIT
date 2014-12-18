<?php 
include "../../config/koneksi.php";

$id_level = $_POST['id_level'];
$nama = $_POST['nama'];
$statusTombol = $_POST['statusTombol'];
//print_r($_POST); //lihat di consol log

	if($statusTombol == 'simpan'){
		$sqlInput = "INSERT INTO `level`(`nama`) VALUES ('$nama')";
		$queryInput = mysql_query($sqlInput);
		if($queryInput){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'hapus'){
		echo "Hapus=".$id_level;
		$sqlHapus = "DELETE FROM `level` WHERE `id_level`='$id_level'";
		$queryHapus = mysql_query($sqlHapus);
		if($queryHapus){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'update'){
		$sqlUpdate = "UPDATE `level` SET `nama`='$nama' WHERE `id_level`=".$id_level;
		$queryUpdate = mysql_query($sqlUpdate);
		if($queryUpdate){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>