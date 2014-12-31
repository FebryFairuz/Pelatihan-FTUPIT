<?php 
$sqlTampil = "SELECT * FROM `brands` ORDER BY nama ASC";
$queryTampil = mysql_query($sqlTampil);
$jmlTampil = mysql_num_rows($queryTampil);
?>
<script type="text/javascript">
	$(document).ready(function(){
	  $(".setting").addClass("in");
	  $(".brands").addClass("active");
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#formBrands").validate({
            rules:{ nama:"required"},
            messages:{ 
                    nama: {
                        required:'Name cant be empty',
                        minlength:'<span class="glyphicon glyphicon-remove"></span> minimal 5 karakter',
                        maxlength:'maximal 10 karakter'
                   	}
                    
             success: function(label) {
                label.html("<i class='glyphicon glyphicon-ok'></i>").addClass('valid');
             }
            });
        });
	});
</script>
<div class="header">    
  <h1 class="page-title">Dashboard</h1>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a> </li>
    <li><a class="active">Setting</a> </li>
    <li><a class="active"><?php echo ucwords($p); ?></a> </li>
  </ul>
</div>
<div class="main-content">
	<div class="btn-toolbar list-toolbar">
	    <a class="btn btn-primary" href="#modalForm" id="newData" role="button" data-toggle="modal"><i class="fa fa-plus"></i> New <?php echo ucwords($p); ?></a>
	    <a class="btn btn-success" href="#modalForm" id="btn-edit" role="button" data-toggle="modal"><i class="fa fa-pencil"></i> Update</a>
	    <a class="btn btn-danger" href="#modalDelete" id="btn-delete" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i> Delete</a>
	    <a class="btn btn-default pull-right" >Total : <?php echo $jmlTampil; ?></a>
	</div>

	<div class="panel-scroll-body">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th width="2">No</th>
		      <th>Name</th>
		    </tr>
		  </thead>
		  <tbody>
	      <?php 
	      	if($jmlTampil > 0){
	      		$no = 0;
	      		while($brands = mysql_fetch_array($queryTampil)){
		  ?>
				    <tr>
				      <td><?php echo $no+1; ?></td>
				      <td><span class="nama"><?php echo $brands['nama'] ?></span>
				      	  <span class="id_brands hidden"><?php echo $brands['id_brands'] ?></span>
				      	  <span class="jenis_brands hidden"><?php echo $brands['id_brands'] ?></span>
				      </td>
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

</div>




<!-- Alert Modal Bootstrap -->
<!-- modal form -->
<div class="modal small fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog panel-modal-big">
    <div class="modal-content">
        <div class="modal-header blue-modal">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
        </div>
        <div role="tabpanel">
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="form active"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Form <?php echo ucwords($p); ?></a></li>
		    <li role="presentation" class="tab-add-picture"><a href="#picture" aria-controls="picture" role="tab" data-toggle="tab">Add Picture</a></li>
		    <li role="presentation" class="tab-list-picture"><a href="#listPicture" aria-controls="listPicture" role="tab" data-toggle="tab">Picture List</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		  <!-- FORM -->
		    <div role="tabpanel" class="tab-pane tab-form active" id="data">
	    		<form action="" method="post" id="formBrands" name="formBrands" autocomplete="off">
			    	<div class="modal-body panel-modal-scrol">
			    		<label>Name</label><br>
			            <input type="text" name="nama" class="form-control required" minlength="4" maxlength="10" placeholder="Nama brands Produk">
			            <div id="info"></div>
			            <div class="hidden">
				            <input type="text" name="id_brands" />
				            <input type="text" name="statusTombol" />
			            </div>
			    	</div>
			    	<div class="modal-footer">
			            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
		            	<input type="submit" value="Save" id="btn-saving" class="btn btn-primary" />
			        </div>
		        </form>
		    </div>

		    <!-- ADD PICTURE -->
		    <div role="tabpanel" class="tab-pane tab-picture" id="picture">
		    	<div class="modal-body panel-modal-scrol">
		    		<div class="col-sm-6">
			    		<form id="uploadimage" action="" method="post" 
			    		enctype="multipart/form-data">
							<div id="image_preview"><center>
								<img id="previewing" src="assets/images/noimage.png" />
								</center>
							</div>	
							<div id="selectImage">
								<label>Select Your Image</label><br/>
					            <input type="hidden" name="id_data" required />
				                <input type="hidden" name="jenis" value="brands" required />
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

		    <!-- DAFTAR PICTURE -->
		    <div role="tabpanel" class="tab-pane tab-picture-list" id="listPicture">
		    	<div class="modal-body panel-modal-scrol">
		    		<div class="info-delete-pic"></div>
		    		<div id="daftarGambar"></div>
		    	</div>
		    	<div class="modal-footer">
		            <button class="btn btn-default" data-dismiss="modal" 
		            aria-hidden="true">Cancel</button>
		            <button class="btn btn-primary btn-delete-list-pic">
		            Delete</button>
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
    $("#formBrands").validate({
        rules:{nama:"required"},
        messages:{ 
                nama: {
	                    required:'Cant be empty',
	                    minlength:'<span class="glyphicon glyphicon-remove"></span> minimal 4 charackter',
	                    maxlength:'maximal 10 charackter'
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

   	    	$("[name=nama]").val("");
   	    	$("[name=id_brands]").val("");
   	    	$("[name=statusTombol]").val("simpan");
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

    		var id_brands = $(".pilih .id_brands").html();
            var nama = $(".pilih .nama").html();
            console.log(id_brands+nama);
            $("[name=nama]").val(nama);
            $("[name=id_brands]").val(id_brands);
            $("[name=id_data]").val(id_brands);
            $("[name=statusTombol]").val("update");
	    	$("#btn-saving").prop('disabled', false);
    	});

   	//form eksekusi input dan edit dengan ajax
    	$("[name=formBrands]").submit(function(e){
			e.preventDefault(); // mencegah default. defaultnya form itu ngeload ke action tapi dibatalkan dengan fungsi ini
			var id_brands=$("[name='id_brands']").val();
			var nama=$("[name='nama']").val();
			var statusTombol=$("[name='statusTombol']").val();
			console.log(nama);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/brands.php",
			  data:"id_brands="+id_brands+"&nama="+nama+"&statusTombol="+statusTombol,
			  success:function(data){
			  	console.log(data);
			  	if(data != 0){
			  		var loading = "<img src='assets/images/loading.gif' width='50'> Wait for a second..";
			  		var url = "<meta http-equiv=\"refresh\" content=\"1; url=?p=<?php echo $p;?>\" />";
			    	
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
    		var id_brands = $(".pilih .id_brands").html();
            var nama = $(".pilih .nama").html();
            console.log(id_brands+nama);
            $(".isi").html(nama);
            $("[name=deleteData] .id").html("<input type='hidden' name='id' value='"+id_brands+"'>");
    	});

        $("[name=deleteData]").submit(function(e){
        	e.preventDefault();
			var id_brands=$("[name='id']").val();
			var statusTombol="hapus";
			console.log("id="+id_brands);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/brands.php",
			  data:"id_brands="+id_brands+"&statusTombol="+statusTombol,
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
   });
</script>
