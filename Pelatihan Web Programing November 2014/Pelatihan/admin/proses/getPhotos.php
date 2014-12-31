<?php 
include "../../config/koneksi.php";
$id = $_POST['id_data'];
$jenis = $_POST['jenis'];

$sql = "SELECT * FROM `picture` WHERE `jenis`='$jenis' and `id`=".$id;
$query = mysql_query($sql);
$jml = mysql_num_rows($query);
if($jml > 0){
	while($gp = mysql_fetch_array($query)) {
		echo"
			<div class='col-sm-4'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='list-picture'>
							<img src='photos_upload/$gp[jenis]/$gp[picture]' class='img-responsive img-pic'>
				     		<span class='id_picture' hidden>$gp[id_picture]</span>
				     		<span class='picture' hidden>$gp[picture]</span>
				     		<span class='jenis' hidden>$gp[jenis]</span>
				     		<span class='id_data' hidden>$gp[id]</span>
						</div>
					</div>
				</div>
			</div>"; ?>
		<script type="text/javascript">
	    	$(".col-sm-12 .list-picture").click(function(){
				$(".list-picture").removeClass("pilih-pic");
				$(this).addClass("pilih-pic");
				$(".btn-delete-list-pic").prop('disabled', false);

				/*var id_picture = $(".pilih-pic .id_picture").html();
				var picture = $(".pilih-pic .picture").html();
				console.log("id="+id_picture);
				console.log("pc="+picture);*/
			});
	    </script>
<?php
	}
}

?>