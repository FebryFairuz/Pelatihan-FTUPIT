<?php  
include "../config/koneksi.php";

//mengambil nilai
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//proses cek ke database
$sql = "SELECT * FROM `users` WHERE `username`= '$username' and `password` = '$password'";
$query = mysql_query($sql); //eksekusi cek ke database
$jml = mysql_num_rows($query); // jumlah yang tersedia di database
$user = mysql_fetch_array($query); //mengambil nilai dari database

if($jml > 0){
	session_start();
	$_SESSION['id_user']  = $user['id_user'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['password'] = $user['password'];
	$_SESSION['id_level'] = $user['id_level'];

	echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Sukses Login')
		    window.location.href='index.php';
		    </SCRIPT>");
}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Username dan Password salah.')
		    window.location.href='login.php';
		    </SCRIPT>");
}

?>