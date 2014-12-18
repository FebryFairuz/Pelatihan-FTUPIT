<?php 
include "../../config/koneksi.php";

$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];
$statusTombol = $_POST['statusTombol'];
//print_r($_POST); //lihat di consol log

	if($statusTombol == 'simpan'){
		$sqlInput = "INSERT INTO `jenis_produk`(`nama`) VALUES ('$nama')";
		$queryInput = mysql_query($sqlInput);
		if($queryInput){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'hapus'){
		echo "Hapus=".$id_jenis;
		$sqlHapus = "DELETE FROM `jenis_produk` WHERE `id_jenis`='$id_jenis'";
		$queryHapus = mysql_query($sqlHapus);
		if($queryHapus){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'update'){
		$sqlUpdate = "UPDATE `jenis_produk` SET `nama`='$nama' WHERE `id_jenis`=".$id_jenis;
		$queryUpdate = mysql_query($sqlUpdate);
		if($queryUpdate){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>