<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecosains";
$koneksi = mysql_connect($host,$user, $pass);
if(!$koneksi){
	echo "Couldn't connect to host 
	$host because <b>".mysql_error()."</b>";
}else{
	$select_db = mysql_select_db($db);
	if(!$select_db){
	  echo "Couldn't select database 
	  $db because <b>".mysql_error()."</b>";
	}
}
?>