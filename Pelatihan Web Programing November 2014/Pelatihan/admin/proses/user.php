<?php 
error_reporting(0);
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

$kataKunci = $_POST['kataKunci'];

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

	}else if($statusTombol == 'getData'){
		//print_r($_POST);
		$sqlGetData = "select * from users where id_user = '$id_user'";
		$queryGetData = mysql_query($sqlGetData);
		$gd = mysql_fetch_array($queryGetData);
		$data = array('username'=>$gd['username'],
					  'password'=>$gd['password'],
					  'company_name'=>$gd['company_name'],
					  'address'=>$gd['address'],
					  'city'=>$gd['city'],
					  'postal'=>$gd['postal'],
					  'province'=>$gd['province'],
					  'country'=>$gd['country'],
					  'phone_company'=>$gd['phone_company'],
					  'email_company'=>$gd['email_company'],
					  'fax'=>$gd['fax'],
					  'company_url'=>$gd['company_url'],
					  'product_interest'=>$gd['product_interest'],
					  'fullname'=>$gd['fullname'],
					  'phone_person'=>$gd['phone_person'],
					  'email_person'=>$gd['email_person'],
					  'id_level'=>$gd['id_level'],
					  'id_user'=>$gd['id_user']
					  );
		echo json_encode($data);

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
			echo "Berhasil 3333";
		}else{
			echo "Gagal";
		}
	}else if($statusTombol == "search"){
		//print_r($_POST);
	    $sqlSearch = "SELECT * FROM `users` WHERE (`username` LIKE '%$kataKunci%') or 
	    										  (`fullname` LIKE '%$kataKunci%') or 
	    										  (`email_person` LIKE '%$kataKunci%') or 
	    										  (`email_company` LIKE '%$kataKunci%') or 
	    										  (`company_name`LIKE '%$kataKunci%')";
	    $querySearch = mysql_query($sqlSearch);
	    $jmlTampil = mysql_num_rows($querySearch);
	    if($jmlTampil > 0){
	    	$no=0;
	    	while ($s = mysql_fetch_array($querySearch)) {
?>
				<tr>
			      <td><?php echo $no+1; ?></td>
			      <td><span class="username"><?php echo $s['username'] ?></span>
			      	  <span hidden class="id_user"><?php echo $s['id_user'] ?></span>
			      </td>
			      <td><span class="fullname"><?php echo $s['fullname'] ?></span></td>
			      <td><span class="company_name"><?php echo $s['company_name'] ?></span></td>
			      <td>
			      	<!-- memanggil dari tabel level -->
			      	<?php 
			      	$sqlLevel = "SELECT * FROM `level` where id_level = '$s[id_level]'";
			      	$queryLevel = mysql_query($sqlLevel);
			      	$l = mysql_fetch_array($queryLevel);
			      	echo "<span>$l[nama]</span>";
			      	?>
			      </td>
			    </tr>
			    <script type="text/javascript">
			    	$(".table tbody tr").click(function(){
			            $("tr").removeClass("pilih");
			            $(this).addClass("pilih");
			            console.log("aaa");
			        });
			    </script>
<?php	
	    	$no++;

	    	}
	    }else{
	    	echo "<tr><td colspan=5>There were not records</td></tr>";
	    }
	}
?>