<!-- <form name="abc" action="" method="post">
	<?php
		/*for ($i=0; $i < 3; $i++) { 
			echo "<input name='username[$i]' placeholder='username'>
				  <input name='password[$i]' placeholder='password'><br>";
		}*/
	?>
	<input type="submit" value="kirim">
</form> -->
<div></div>
<table class="table table-border">
	<tr>
		<th width="2">No</th>
		<th>nama</th>
		<th>harga</th>
		<th></th>
	</tr>
	<form method="post" action="" name="keranjang">
<?php 

	//mentotalkan biaya
	$sqlTotal = "SELECT SUM(`harga`)as total FROM `tes1`";
	$queryTotal = mysql_query($sqlTotal);
	$tb = mysql_fetch_array($queryTotal); 
	$total = $tb['total'];
	
	//menampilkan data tes1
	$sql = "SELECT * FROM `tes1`";
	$query = mysql_query($sql);
	$jml = mysql_num_rows($query);
	if($jml > 0){
		$no =1;
		$i=0;
		while ($t = mysql_fetch_array($query)) {			
			echo "<tr>
					<td>$no</td>
					<td>$t[nama]</td>
					<td>$t[harga]</td>
					<td><input type='text' name='id_test1[$i]' value='$t[id_test1]'><br>
						<input type='text' name='total[$i]' value='$total'></td>
				  </tr>";
			$no++;
			$i++;
		}
		echo "<tr>
				<td colspan='3'>Total</td>
				<td>$total</td>
			  </tr>
			  <tr>
				<td colspan='4'><input type='submit' value='ok' class='btn btn-primary'></td>
			  </tr></form>
			  ";
	}else{
		echo "<tr>
				<td colspan='4'>tdk ada</td>
			  </tr>";
	}
?>
</table>
<div class="info"></div>

<!--<script>
	$(document).ready(function(){
		$("[name='abc']").submit(function(e){
			e.preventDefault(); // mencegah default. defaultnya form itu ngeload ke action tapi dibatalkan dengan fungsi ini
			var formData = $(this).serialize(); // menjadikan input ke url , lihat console. bisa pake serializeArray() juga
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'proses.php',
			   data: formData, 
			   success: function(data){
			      console.log(data);
			   }
			});
		});
	});
</script>-->
<script>
	$(document).ready(function(){
		$("[name='keranjang']").submit(function(e){
			e.preventDefault(); // mencegah default. defaultnya form itu ngeload ke action tapi dibatalkan dengan fungsi ini
			var formData = $(this).serialize(); // menjadikan input ke url , lihat console. bisa pake serializeArray() juga
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'proses2.php',
			   data: formData, 
			   success: function(data){
			      console.log(data);
			      alert("Berhasil melakukan transaksi. Silakan melakukan pembayaran, jika dalam 1x24 jam belum melakukan pembayaran maka keranjang anda akan kami hapus.");
			      window.location.href='index.php';
			   }
			});
		});
	});
</script>
