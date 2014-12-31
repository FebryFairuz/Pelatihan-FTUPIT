<?php 
include "../../config/koneksi.php";

$id_picture = $_POST['id_picture'];
$picture = $_POST['picture'];
$jenis = $_POST['jenis'];

$sql = "DELETE FROM `picture` WHERE `id_picture`=".$id_picture;
$query = mysql_query($sql);
if($query){
	//hapus foto permanen
	unlink("../photos_upload/$jenis/$picture");
	echo 1;
}else{
	echo 0;
}
?>