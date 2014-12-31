<?php 
include "../../config/koneksi.php";

$id_brands = $_POST['id_brands'];
$nama = $_POST['nama'];
$statusTombol = $_POST['statusTombol'];
//print_r($_POST); //lihat di consol log

	if($statusTombol == 'simpan'){
		$sqlInput = "INSERT INTO `brands`(`nama`) VALUES ('$nama')";
		$queryInput = mysql_query($sqlInput);
		if($queryInput){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'hapus'){
		echo "Hapus=".$id_brands;
		$sqlHapus = "DELETE FROM `brands` WHERE `id_brands`='$id_brands'";
		$queryHapus = mysql_query($sqlHapus);
		if($queryHapus){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'update'){
		$sqlUpdate = "UPDATE `brands` SET `nama`='$nama' WHERE `id_brands`=".$id_brands;
		$queryUpdate = mysql_query($sqlUpdate);
		if($queryUpdate){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>