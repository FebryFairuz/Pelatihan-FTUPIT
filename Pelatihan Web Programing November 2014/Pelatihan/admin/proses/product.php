<?php 
error_reporting(0);
session_start();
include "../../config/koneksi.php";
include "../../config/rupiah.php";
date_default_timezone_set('Asia/Jakarta');

$id_product = $_POST['id_product'];
$id_jenis = $_POST['id_jenis'];
$id_brands = $_POST['id_brands'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];
$partnumber = $_POST['partnumber'];
$list_price = $_POST['list_price'];
$nett_price = $_POST['nett_price'];
$garansi = $_POST['garansi'];
$tgl = date('Y-m-d H:i:s');

$kataKunci = $_POST['kataKunci'];

$statusTombol = $_POST['statusTombol'];
//print_r($_POST); //lihat di consol log

	if($statusTombol == 'simpan'){
		$sqlInput = "INSERT INTO `product`(`id_jenis`, `id_brand`, `id_user`, `nama`, `deskripsi`, `jumlah`, `partnumber`, `garansi`, `list_price`, `nett_price`, `created_at`) 
								   VALUES ('$id_jenis', '$id_brands', '$_SESSION[id_user]', '$nama', '$deskripsi', '$jumlah', '$partnumber', '$garansi', '$list_price', '$nett_price', '$tgl')";
		$queryInput = mysql_query($sqlInput);
		if($queryInput){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'hapus'){
		$sqlHapus = "DELETE FROM `product` WHERE `id_product`='$id_product'";
		$queryHapus = mysql_query($sqlHapus);
		if($queryHapus){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}else if($statusTombol == 'getData'){
		//print_r($_POST);
		$sqlGetData = "select * from product where id_product = '$id_product'";
		$queryGetData = mysql_query($sqlGetData);
		$gd = mysql_fetch_array($queryGetData);
		$data = array('nama'		=>$gd['nama'],
					  'deskripsi'	=>$gd['deskripsi'],
					  'jumlah'		=>$gd['jumlah'],
					  'garansi'		=>$gd['garansi'],
					  'list_price'	=>$gd['list_price'],
					  'nett_price'	=>$gd['nett_price'],
					  'partnumber'	=>$gd['partnumber'],					  
					  'id_jenis'	=>$gd['id_jenis'],
					  'id_brands'	=>$gd['id_brand'],
					  'id_product'	=>$gd['id_product']
					  );
		echo json_encode($data);

	}else if($statusTombol == 'update'){
		$sqlUpdate = "UPDATE `product` SET `nama`	='$nama',
										`deskripsi`	='$deskripsi',
										`jumlah`	='$jumlah',
										`garansi`	='$garansi',
										`list_price`='$list_price',
										`nett_price`='$nett_price',
										`partnumber`='$partnumber',
										`id_jenis`	='$id_jenis',
										`id_brand`	='$id_brands',
										`id_user`	='$_SESSION[id_user]'
								  WHERE `id_product` = '$id_product'";
		$queryUpdate = mysql_query($sqlUpdate);
		if($queryUpdate){
			echo "Berhasil Update";
		}else{
			echo "Gagal Update";
		}
	}else if($statusTombol == "search"){
		//print_r($_POST);
	    $sqlSearch ="SELECT *,brands.nama as namaBrand,product.nama as namaProduct
					FROM `product`
					Join brands
					on brands.id_brands = product.`id_brand`
					WHERE (product.nama LIKE '%$kataKunci%') or (product.partnumber LIKE '%$kataKunci%')";
	    $querySearch = mysql_query($sqlSearch);
	    $jmlTampil = mysql_num_rows($querySearch);
	    if($jmlTampil > 0){
	    	$no=0;
	    	while ($product = mysql_fetch_array($querySearch)) {
?>
				 <tr>
				      <td><?php echo $no+1; ?></td>
				      <td><span class="nama"><?php echo $product['namaProduct'] ?></span>
				      	  <div hidden>
					      	  <span class="id_product"><?php echo $product['id_product'] ?></span>
				      	  </div>
				      </td>
				      <td><span class="namaBrand"><?php echo $product['namaBrand'] ?></span></td>
				      <td><span class="jumlah"><?php echo $product['jumlah'] ?></span></td>
				      <td><span class="partnumber"><?php echo $product['partnumber'] ?></span></td>
				      <td><span class="garansi"><?php echo $product['garansi'] ?></span></td>
				      <td><span class="list_price"><?php echo rupiah($product['list_price']) ?></span></td>
				      <td><span class="nett_price"><?php echo rupiah($product['nett_price']) ?></span></td>
				      <td><span class="created_at"><?php echo $product['created_at'] ?></span></td>				      
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