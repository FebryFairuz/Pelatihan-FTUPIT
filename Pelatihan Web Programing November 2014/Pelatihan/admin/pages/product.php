<?php 
//paging batas
$batas = 10;
$hal = $_REQUEST['hal'];
if(empty($hal)){$posawal = 0;$hal = 1;}
else{$posawal = ($hal-1) * $batas;}

$sqlTampil =   "SELECT *,brands.nama as namaBrand,product.nama as namaProduct
				FROM `product`
				Join brands
				on brands.id_brands = product.`id_brand`
				ORDER BY id_product ASC LIMIT $posawal,$batas";
//$sqlTampil = "SELECT * FROM `product` ORDER BY id_product ASC LIMIT $posawal,$batas";
$queryTampil = mysql_query($sqlTampil);
$jmlTampil = mysql_num_rows($queryTampil);

?>
<div class="header">    
  <h1 class="page-title">Dashboard</h1>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a> </li>
    <li><a class="active"><?php echo ucwords($p); ?></a> </li>
  </ul>
</div>
<div class="main-content">
	<div class="btn-toolbar list-toolbar">
		<div class="row">
			<div class="col-sm-12">
				<a class="btn btn-default pull-right" >Total Product : <?php echo $jmlTampil; ?></a>
		        <form class="form-inline" name="formSearch">
		            <a class="btn btn-primary" href="#modalForm" id="newData" role="button" data-toggle="modal"><i class="fa fa-plus"></i> New <?php echo ucwords($p); ?></a>
			    	<a class="btn btn-success" href="#modalForm" id="btn-edit" role="button" data-toggle="modal"><i class="fa fa-pencil"></i> Update</a>
			    	<a class="btn btn-danger" href="#modalDelete" id="btn-delete" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i> Delete</a>
			    	<a class="btn btn-info" href="#modalDetail" id="btn-detail" role="button" data-toggle="modal"><i class="glyphicon glyphicon-check"></i> Detail</a>

		            <input type="hidden" name="statusTombol" value="search" />
		            <input name="kataKunci" class="form-control" placeholder="Search name or partnumber" id="appendedInputButton" type="text" required>
		            <input class="btn btn-warning btn-search" type="submit" value="Search" />
		        </form> 
			</div>
		</div>    
	
	    	
	</div>
	<div class="panel-scroll-body">
		<table id="table-result" class="table table-hover">
		  <thead>
		    <tr>
		      <th width="2">No</th>
		      <th>Nama</th>
		      <th>Brand</th>
		      <th>Jumlah</th>
		      <th>Part Number</th>
		      <th>Garansi</th>
		      <th>List Price</th>
		      <th>Nett Price</th>
		      <th>Created At</th>
		    </tr>
		  </thead>
		  <tbody>
	      <?php 
	      	if($jmlTampil > 0){
	      		$no = 0;
	      		while($product = mysql_fetch_array($queryTampil)){
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
		  <?php 
		  		$no++;
		  		}
		  	}else{
		  		echo "<tr><td colspan='3'>No Data Entry</td></tr>";
		  	}
		  ?>
		  </tbody>
		</table>
	</div>

<!-- paging -->	
<?php
	$page = mysql_query("SELECT * FROM `product`");
	$jmlPage = mysql_num_rows($page);
	if($jmlPage > 0){
		$jmlHal = ceil($jmlPage/$batas);
			echo "<ul class='pagination'>";
		if($hal > 1){
			$prev=$hal-1;
			echo "<li><a href='$_SERVER[PHP_SELF]?hal=$prev&p=$p'>«</a></li> ";
		}else{
			echo "<li class='disabled'><a>«</a></li> ";
		}

		//Tampil link halaman 1..2..3..
		for($i=1; $i<=$jmlHal; $i++)
			if($i != $hal){echo "<li><a href='$_SERVER[PHP_SELF]?hal=$i&p=$p'>$i</a><li>";}
			else{echo "<li class='disabled'><a>$i</a></li>";}
		
		//Link NEXT
		if($hal < $jmlHal){
			$next = $hal+1;
			echo "<li><a href='$_SERVER[PHP_SELF]?hal=$next&p=$p'>»</a></li>";
		}else{
			echo "<li class='disabled'><a>»</a></li> ";
		}

		echo "</ul>";
	}
?>
</div>

<!-- Alert Modal Bootstrap -->
<!-- modal form -->
<div class="modal small fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog panel-modal-big">
    <div class="modal-content">
        <div class="modal-header blue-modal">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
        </div>
        <div>
        	<div role="tabpanel">
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="form active"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Form <?php echo ucwords($p); ?></a></li>
			    <li role="presentation" class="tab-add-picture"><a href="#picture" aria-controls="picture" role="tab" data-toggle="tab">Add Picture</a></li>
			    <li role="presentation" class="tab-list-picture"><a href="#listPicture" aria-controls="listPicture" role="tab" data-toggle="tab">Picture List</a></li>
			  </ul>
			  <div class="tab-content">
			    <!-- form -->
			    <div role="tabpanel" class="tab-pane tab-form active" id="data">
			    	<form action="" method="post" id="formProduct" name="formProduct" autocomplete="off">        	
				        <div class="modal-body panel-modal-scrol">
				            <input type="text" name="nama" class="form-control required" minlength="4" maxlength="50" placeholder="Name of Product" />
				            <select class="form-control" name="id_jenis" required>
				            	<option value="">Select Kind of Product</option>
				            	<?php 
				            	$sqlJenis = "select * from jenis_produk";
				            	$queryJenis = mysql_query($sqlJenis);
				            	while ($jp = mysql_fetch_array($queryJenis)) {
				            		echo "<option value='$jp[id_jenis]'>$jp[nama]</option>";
				            	}
				            	?>
				            </select>
				            <select class="form-control" name="id_brands" required>
				            	<option value="">Select Brands</option>
				            	<?php 
				            	$sqlBrands = "select * from brands";
				            	$queryBrands = mysql_query($sqlBrands);
				            	while ($bd = mysql_fetch_array($queryBrands)) {
				            		echo "<option value='$bd[id_brands]'>$bd[nama]</option>";
				            	}
				            	?>
				            </select>

				            <textarea name="deskripsi" class="form-control required" minlength="4" placeholder="Deskripsi"></textarea>
				            <input type="text" name="jumlah" class="form-control required" placeholder="Total" />
				            <input type="text" name="partnumber" class="form-control required" minlength="4" maxlength="20" placeholder="Part Number" />
				            <input type="text" name="garansi" class="form-control required" placeholder="Garansi" />
				            <input type="text" name="list_price" class="form-control required" placeholder="List Price" />
				            <input type="text" name="nett_price" class="form-control required" placeholder="Nett Price" />

				            <div class="hidden">
					            <input type="text" name="id_product" />
					            <input type="text" name="statusTombol" />
				            </div>
				        </div>
			            <div id="info"></div>
				        <div class="modal-footer ">
				            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
				            <input type="submit" value="Save" id="btn-saving" class="btn btn-primary" />
				        </div>
			        </form>
			    </div>

			    <!-- add picture -->
			    <div role="tabpanel" class="tab-pane tab-picture" id="picture">
			    	<div class="modal-body panel-modal-scrol">
				    	<div class="col-sm-6">
				    		<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
								<div id="image_preview"><center>
									<img id="previewing" src="assets/images/noimage.png" />
									</center>
								</div>	
								<div id="selectImage">
									<label>Select Your Image</label><br/>
						            <input type="hidden" name="id_data" required />
					                <input type="hidden" name="jenis" value="product" required />
					                <input type="file" name="file" id="file" required class="form-control" />
									<input type="submit" value="Upload" class="form-control btn btn-primary" />
					            </div>                   
							</form>		
							<div id="loading" hidden>
								<img src='assets/images/loading.gif' width='50'> Wait for a second..
							</div>
				    	</div>
				    	<div class="col-sm-6">
							<div class="rule">
								<h3>Syarat Foto :</h3>
								<ol>
									<li>File berupa JPEG, JPG dan PNG</li>
									<li>Ukuran gambar maksimal 1MB</li>
								</ol>
							</div>
							<div id="message"></div>				    						    		
				    	</div>
			    	</div>
					<div class="modal-footer">
			            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
			        </div>
			    </div>

			    <!-- daftar Picture -->
			    <div role="tabpanel" class="tab-pane tab-picture-list" id="listPicture">
			    	<div class="modal-body panel-modal-scrol">
		    			<div class="info-delete-pic"></div>			    		
			    		<div id="daftarGambar"></div>
			    	</div>
			    	<div class="modal-footer ">
			            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
			            <button class="btn btn-primary btn-delete-list-pic">Delete</button>
			        </div>
			    </div>
			  </div>
			</div>
        </div>
        
    </div>
  </div>
</div>
<!-- end -->

<!-- modal delete -->
<div class="modal small fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>
            Are you sure you want to delete <b class="isi"></b> ?<br>This cannot be undone.</p>
            <div id="info"></div>
        </div>
        <div class="modal-footer">
            <form action="" method="post" name="deleteData">            	
	            <div class="id"></div>
	            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
	            <input type="submit" class="btn btn-danger" value="Delete" />
            </form>
        </div>
      </div>
    </div>
</div>
<!-- end -->

<!-- AJAX JQUERY -->
<script type="text/javascript">

   $(document).ready(function(){
   	//validasi
	    $("[name=formProduct]").validate({
	        rules:{nama:"required"},
	        messages:{ 
	                nama: {
		                    required:"<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 4 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 50 charackter"
	                },
	                deskripsi: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 4 charackter"
	                },
	                jumlah: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                partnumber: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 4 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 20 charackter"
	                },
	                garansi: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                id_jenis: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                id_brands: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                list_price: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                nett_price: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                }
	        },
	        success: function(label) {
	            label.html("<i class='glyphicon glyphicon-ok'></i>").addClass('valid');
		    	$("#btn-saving").prop('disabled', false);
	        }
	    });
    //perintah input
   	    $("#newData").click(function(){
   	    	$("#btn-saving").prop('disabled', true);
   	    	$(".form").addClass("active");
   	    	$(".tab-form").addClass("active");
   	    	$(".tab-picture").removeClass("active");
   	    	$(".tab-picture-list").removeClass("active");
   	    	$(".tab-add-picture").hide();
   	    	$(".tab-list-picture").hide();

   	    	$("[name=statusTombol]").val("simpan");

   	    	$("[name=id_product]").val("");
            $("[name=nama]").val("");
            $("[name=jumlah]").val("");
            $("[name=deskripsi]").val("");
            $("[name=partnumber]").val("");
            $("[name=garansi]").val("");
            $("[name=list_price]").val("");
            $("[name=nett_price]").val("");
   	    });
   	    
   	//perintah edit
   		$("#btn-edit").click(function(){
   	    	$(".form").addClass("active");
   	    	$(".tab-form").addClass("active");
   	    	$(".tab-add-picture").removeClass("active");
   	    	$(".tab-picture").removeClass("active");
   	    	$(".tab-list-picture").removeClass("active");
   	    	$(".tab-picture-list").removeClass("active");

   	    	$(".tab-add-picture").show();
   	    	$(".tab-list-picture").show();
   			
   			//mengambil nilai
    		var id_product = $(".pilih .id_product").html();
            $.ajax({
			  type:"post",
			  url:"proses/product.php",
			  data:"id_product="+id_product+"&statusTombol=getData",
			  dataType: 'json',
			  success:function(data){
			  	console.log(data);

		  	//mengisikan data ke dalam database
            	$("[name=id_product]").val(data.id_product);
	            $("[name=nama]").val(data.nama);
	            $("[name=jumlah]").val(data.jumlah);
	            $("[name=deskripsi]").val(data.deskripsi);
	            $("[name=partnumber]").val(data.partnumber);
	            $("[name=garansi]").val(data.garansi);
	            $("[name=list_price]").val(data.list_price);
	            $("[name=nett_price]").val(data.nett_price);

            	$("[name=id_data]").val(data.id_product);

	            $("[name=statusTombol]").val("update");
		    	$("#btn-saving").prop('disabled', false);
			  }

			});
    	});

   	//form eksekusi input dan edit dengan ajax
    	$("[name=formProduct]").submit(function(e){
			e.preventDefault(); 
			var formData = $(this).serialize();
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'proses/product.php',
			   data: formData, 
			   success: function(data){
			    console.log(data);
			    if(data != 0){
			  		var loading = "<img src='assets/images/loading.gif' width='50'> Wait for a second..";
			  		
			    	$("#info").append(loading);
			    	setInterval(function() {
			      		var address = "?p=<?php echo $p;?>";
						$(location).attr('href',address);
                	}, 2000);
			  	}else{
			    	var failed = "<i class='glyphicon glyphicon-remove'> There is something wrong. Try again.."
			    	$("#info").append(failed);			  		
			  	}		      
			   }
			});
        }); 

    //perintah Hapus
    	$("#btn-delete").click(function(){
    		var id_product = $(".pilih .id_product").html();
            var nama = $(".pilih .nama").html();
            console.log(id_product+nama);
            $(".isi").html(nama);
            $("[name=deleteData] .id").html("<input type='hidden' name='id' value='"+id_product+"'>");
    	});

        $("[name=deleteData]").submit(function(e){
        	e.preventDefault();
			var id_product=$("[name='id']").val();
			var statusTombol="hapus";
			console.log(id_product);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/product.php",
			  data:"id_product="+id_product+"&statusTombol="+statusTombol,
			  success:function(data){
			  	console.log(data);
			  	if(data != 0){
			  		setInterval(function() {
			      		var address = "?p=<?php echo $p;?>";
						$(location).attr('href',address);
                	}, 1000);
			  	}else{
			    	var failed = "<i class='glyphicon glyphicon-remove'> There is something wrong. Try again.."
			    	$("#info").append(failed);			  		
			  	}
			  }

			});
        });

    //form searching
    	$(".btn-search").click(function(){
   	    	$("[name=statusTombol]").val("search");
    	});
        $("[name=formSearch]").submit(function(e){
			e.preventDefault(); 
			var formData = $(this).serialize();
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'proses/product.php',
			   data: formData, 
			   success: function(response){
			    console.log(response);
			    $("#table-result tbody").html(response);
			   }
			});
        });
   });
</script>
