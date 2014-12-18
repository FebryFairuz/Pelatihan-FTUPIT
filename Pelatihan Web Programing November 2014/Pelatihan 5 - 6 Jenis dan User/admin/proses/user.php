<?php 
include "../../config/koneksi.php";

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$province = $_POST['province'];
$country = $_POST['country'];
$phone_company = $_POST['phone_company'];
$email_company = $_POST['email_company'];
$fax = $_POST['fax'];
$company_url = $_POST['company_url'];
$product_interest = $_POST['product_interest'];
$phone_person = $_POST['phone_person'];
$email_person = $_POST['email_person'];
$fullname = $_POST['fullname'];
$company_name = $_POST['company_name'];
$id_level = $_POST['id_level'];
$tgl = date('Y-m-d');
$statusTombol = $_POST['statusTombol'];
//print_r($_POST); //lihat di consol log

	if($statusTombol == 'simpan'){
		$sqlInput = "INSERT INTO `users`(`username`, `password`, `company_name`, `address`, `city`, `postal`, `province`, `country`, `phone_company`, `email_company`, `fax`, `company_url`, `product_interest`, `fullname`, `phone_person`, `email_person`, `id_level`, `created_at`) 
								 VALUES ('$username','$password','$company_name','$address','$city','$postal','$province','$country','$phone_company','$email_company','$fax','$company_url','$product_interest','$fullname','$phone_person','$email_person','$id_level','$tgl')";
		$queryInput = mysql_query($sqlInput);
		if($queryInput){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'hapus'){
		$sqlHapus = "DELETE FROM `users` WHERE `id_user`='$id_user'";
		$queryHapus = mysql_query($sqlHapus);
		if($queryHapus){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'update'){
		$sqlUpdate = "UPDATE `users` SET `username`='$username',
															`password`='$password',
															`company_name`='$company_name',
															`address`='$address',
															`city`='$city',
															`postal`='$postal',
															`province`='$province',
															`country`='$country',
															`phone_company`='$phone_company',
															`email_company`='$email_company',
															`fax`='$fax',
															`company_url`='$company_url',
															`product_interest`='$product_interest',
															`fullname`='$fullname',
															`phone_person`='$phone_person',
															`email_person`='$email_person',
															`id_level`='$id_level' 
													  WHERE `id_user` = '$id_user'";
		$queryUpdate = mysql_query($sqlUpdate);
		if($queryUpdate){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>