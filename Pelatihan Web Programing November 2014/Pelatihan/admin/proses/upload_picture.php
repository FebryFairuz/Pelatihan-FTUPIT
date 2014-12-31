<?php
include "../../config/koneksi.php";

if(isset($_FILES["file"]["type"]))  
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]); 
    $file_extension = end($temporary);

    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 100000)
            && in_array($file_extension, $validextensions)){

        if ($_FILES["file"]["error"] > 0){
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        }else{ 
			if (file_exists("../photos_upload/".$_POST['jenis']."/".$_FILES['file']['name'])) {
        		echo "<div class='alert' class='btn btn-error'>
						<button type='button' class='close' data-dismiss='alert'>
						  <span aria-hidden='true'>&times;</span>
						  <span class='sr-only'>Close</span>
						</button>
						<p>".$_FILES["file"]["name"] . " <b>Already Exists.</b></p>
					</div>";
			}else{					
				$sourcePath = $_FILES['file']['tmp_name'];
				$targetPath = "../photos_upload/".$_POST['jenis']."/".$_FILES['file']['name'];  
				move_uploaded_file($sourcePath,$targetPath);			

				//memasukan kedalam database
				$sql = "INSERT INTO `picture`(`picture`, `jenis`, `id`) 
									  VALUES ('".$_FILES["file"]["name"]."','$_POST[jenis]','$_POST[id_data]')";				       
				$query = mysql_query($sql);
				
				echo"<div class='alert' class='btn btn-info'>
						<button type='button' class='close' data-dismiss='alert'>
						  <span aria-hidden='true'>&times;</span>
						  <span class='sr-only'>Close</span>
						</button>
						<p>Image Uploaded Successfully...!!</p>
						<p><b>File Name:</b> ". $_FILES["file"]["name"] . "</b></p>
						<p><b>Type:</b> " . $_FILES["file"]["type"] . "</p>
						<p><b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB</p>
					</div>";
					
			}
        }        
    }else{
        echo "<div class='alert' class='btn btn-error'>
				<button type='button' class='close' data-dismiss='alert'>
				  <span aria-hidden='true'>&times;</span>
				  <span class='sr-only'>Close</span>
				</button>
				<p>***Invalid file Size or Type***</p>
			</div>";
    }
}
?>