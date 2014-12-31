$(document).ready(function(){
//UPLOAD GAMBAR
   	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		$("#message").empty(); 
		$('#loading').show();
		$.ajax({
			type: "POST",
        	url: "proses/upload_picture.php",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data){
				$('#loading').hide();
				$("#message").html(data);
		    }	        
	   });
	}));

// Function to preview image
	$(function() {
        $("#file").change(function() {
			$("#message").empty();
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('#previewing').attr('src','noimage.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
	function imageIsLoaded(e) { 
		$("#file").css("color","green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
		$('#previewing').attr('width', '250px');
		$('#previewing').attr('height', '230px');
	};

//Daftar Gambar
	$(".tab-list-picture").click(function(){
		$(".btn-delete-list-pic").prop('disabled', true);
		var id_data = $("#selectImage [name=id_data]").val();
		var jenis = $("#selectImage [name=jenis]").val();
		var loading = "<img src='assets/images/loading.gif' width='50'> Wait for a second..";
    	$("#daftarGambar").html(loading);
		getPicture(id_data, jenis);
	});

	function getPicture(id_data, jenis){
		$.ajax({
		  type:"post",
		  url:"proses/getPhotos.php",
		  data:"id_data="+id_data+"&jenis="+jenis,
		  success:function(response){
		  	$("#daftarGambar").html(response);
		  },
		  error:function(data){
		  	console.log(data);
		  }
		});
	}

//hapus gambar
	$(".btn-delete-list-pic").prop('disabled', true);
	$(".btn-delete-list-pic").click(function(){
		var id_picture = $(".pilih-pic .id_picture").html();
		var picture = $(".pilih-pic .picture").html();
		var jenis = $(".pilih-pic .jenis").html();
		var id_data = $(".pilih-pic .id_data").html();
		$.ajax({
		  type:"post",
		  url:"proses/deletePhotos.php",
		  data:"id_picture="+id_picture+"&picture="+picture+"&jenis="+jenis,
		  success:function(data){
		  	console.log(data);
		  	if(data == 1){
		  		$(".info-delete-pic").html("<div class='alert' class='btn btn-error'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button><p>Success Delete!</p></div>");
		  		setInterval(function() {					
    				getPicture(id_data, jenis);
    			}, 1000);
		  	}
		  },
		  error:function(data){
		  	console.log(data);
		  }
		});
	});



});