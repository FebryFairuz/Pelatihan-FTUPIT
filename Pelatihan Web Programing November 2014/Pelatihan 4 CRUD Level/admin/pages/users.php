<div class="header">    
  <h1 class="page-title">Dashboard</h1>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a> </li>
    <li><a class="active"><?php echo ucwords($p); ?></a> </li>
  </ul>
</div>
<div class="main-content">
	<div class="btn-toolbar list-toolbar">
	    <a class="btn btn-primary" href="#modalForm" id="newData" role="button" data-toggle="modal"><i class="fa fa-plus"></i> New <?php echo ucwords($p); ?></a>
	    <a class="btn btn-default" href="#modalForm" id="btn-edit" role="button" data-toggle="modal"><i class="fa fa-pencil"></i> Update</a>
	    <a class="btn btn-default" href="#modalDelete" id="btn-delete" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i> Delete</a>
	</div>

	<div class="panel-scroll-body">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th width="2">No</th>
		      <th>Username</th>
		      <th>Full Name</th>
		      <th>Company Name</th>
		      <th>Level</th>
		    </tr>
		  </thead>
		  <tbody>
	      <?php 
	      	$sqlTampil = "SELECT * FROM `users` ORDER BY id_user DESC";
	      	$queryTampil = mysql_query($sqlTampil);
	      	$jmlTampil = mysql_num_rows($queryTampil);
	      	if($jmlTampil > 0){
	      		$no = 0;
	      		while($user = mysql_fetch_array($queryTampil)){
		  ?>
				    <tr>
				      <td><?php echo $no+1; ?></td>
				      <td><span class="username"><?php echo $user['username'] ?></span>
				      	  <div class="hidden">
					      	  <span class="id_user"><?php echo $user['id_user'] ?></span>
					      	  <span class="password"><?php echo $user['password'] ?></span>
					      	  <span class="address"><?php echo $user['address'] ?></span>
					      	  <span class="city"><?php echo $user['city'] ?></span>
					      	  <span class="postal"><?php echo $user['postal'] ?></span>
					      	  <span class="province"><?php echo $user['province'] ?></span>
					      	  <span class="country"><?php echo $user['country'] ?></span>
					      	  <span class="phone_company"><?php echo $user['phone_company'] ?></span>
					      	  <span class="email_company"><?php echo $user['email_company'] ?></span>
					      	  <span class="fax"><?php echo $user['fax'] ?></span>
					      	  <span class="company_url"><?php echo $user['company_url'] ?></span>
					      	  <span class="product_interest"><?php echo $user['product_interest'] ?></span>
					      	  <span class="phone_person"><?php echo $user['phone_person'] ?></span>
					      	  <span class="email_person"><?php echo $user['email_person'] ?></span>
				      	  </div>
				      </td>
				      <td><span class="fullname"><?php echo $user['fullname'] ?></span></td>
				      <td><span class="company_name"><?php echo $user['company_name'] ?></span></td>
				      <td><span class="id_level"><?php echo $user['id_level'] ?></span></td>
				    </tr>
		  <?php 
		  		$no++;
		  		}
		  	}else{
		  		echo "<tr><td colspan='5'>No Data Entry</td></tr>";
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
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Form <?php echo ucwords($p); ?></h3>
        </div>
        <form action="" method="post" name="formLevel" autocomplete="off">        	
	        <div class="modal-body panel-modal-scrol">
	            <p>Company Profile</p>
	            <input type="text" name="company_name" class="form-control" placeholder="Company Name">
	            <textarea name="address" class="form-control" placeholder="Alamat"></textarea>
	            <input type="text" name="city" class="form-control" placeholder="City">
	            <input type="text" name="postal" class="form-control" placeholder="Postal">
	            <input type="text" name="province" class="form-control" placeholder="Province">
	            <select name="country" class="form-control"> 
					<option value="" selected="selected">Select Country</option> 
					<option value="United States">United States</option> 
					<option value="United Kingdom">United Kingdom</option> 
					<option value="Afghanistan">Afghanistan</option> 
					<option value="Albania">Albania</option> 
					<option value="Algeria">Algeria</option> 
					<option value="American Samoa">American Samoa</option> 
					<option value="Andorra">Andorra</option> 
					<option value="Angola">Angola</option> 
					<option value="Anguilla">Anguilla</option> 
					<option value="Antarctica">Antarctica</option> 
					<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					<option value="Argentina">Argentina</option> 
					<option value="Armenia">Armenia</option> 
					<option value="Aruba">Aruba</option> 
					<option value="Australia">Australia</option> 
					<option value="Austria">Austria</option> 
					<option value="Azerbaijan">Azerbaijan</option> 
					<option value="Bahamas">Bahamas</option> 
					<option value="Bahrain">Bahrain</option> 
					<option value="Bangladesh">Bangladesh</option> 
					<option value="Barbados">Barbados</option> 
					<option value="Belarus">Belarus</option> 
					<option value="Belgium">Belgium</option> 
					<option value="Belize">Belize</option> 
					<option value="Benin">Benin</option> 
					<option value="Bermuda">Bermuda</option> 
					<option value="Bhutan">Bhutan</option> 
					<option value="Bolivia">Bolivia</option> 
					<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					<option value="Botswana">Botswana</option> 
					<option value="Bouvet Island">Bouvet Island</option> 
					<option value="Brazil">Brazil</option> 
					<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
					<option value="Brunei Darussalam">Brunei Darussalam</option> 
					<option value="Bulgaria">Bulgaria</option> 
					<option value="Burkina Faso">Burkina Faso</option> 
					<option value="Burundi">Burundi</option> 
					<option value="Cambodia">Cambodia</option> 
					<option value="Cameroon">Cameroon</option> 
					<option value="Canada">Canada</option> 
					<option value="Cape Verde">Cape Verde</option> 
					<option value="Cayman Islands">Cayman Islands</option> 
					<option value="Central African Republic">Central African Republic</option> 
					<option value="Chad">Chad</option> 
					<option value="Chile">Chile</option> 
					<option value="China">China</option> 
					<option value="Christmas Island">Christmas Island</option> 
					<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					<option value="Colombia">Colombia</option> 
					<option value="Comoros">Comoros</option> 
					<option value="Congo">Congo</option> 
					<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
					<option value="Cook Islands">Cook Islands</option> 
					<option value="Costa Rica">Costa Rica</option> 
					<option value="Cote D'ivoire">Cote D'ivoire</option> 
					<option value="Croatia">Croatia</option> 
					<option value="Cuba">Cuba</option> 
					<option value="Cyprus">Cyprus</option> 
					<option value="Czech Republic">Czech Republic</option> 
					<option value="Denmark">Denmark</option> 
					<option value="Djibouti">Djibouti</option> 
					<option value="Dominica">Dominica</option> 
					<option value="Dominican Republic">Dominican Republic</option> 
					<option value="Ecuador">Ecuador</option> 
					<option value="Egypt">Egypt</option> 
					<option value="El Salvador">El Salvador</option> 
					<option value="Equatorial Guinea">Equatorial Guinea</option> 
					<option value="Eritrea">Eritrea</option> 
					<option value="Estonia">Estonia</option> 
					<option value="Ethiopia">Ethiopia</option> 
					<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
					<option value="Faroe Islands">Faroe Islands</option> 
					<option value="Fiji">Fiji</option> 
					<option value="Finland">Finland</option> 
					<option value="France">France</option> 
					<option value="French Guiana">French Guiana</option> 
					<option value="French Polynesia">French Polynesia</option> 
					<option value="French Southern Territories">French Southern Territories</option> 
					<option value="Gabon">Gabon</option> 
					<option value="Gambia">Gambia</option> 
					<option value="Georgia">Georgia</option> 
					<option value="Germany">Germany</option> 
					<option value="Ghana">Ghana</option> 
					<option value="Gibraltar">Gibraltar</option> 
					<option value="Greece">Greece</option> 
					<option value="Greenland">Greenland</option> 
					<option value="Grenada">Grenada</option> 
					<option value="Guadeloupe">Guadeloupe</option> 
					<option value="Guam">Guam</option> 
					<option value="Guatemala">Guatemala</option> 
					<option value="Guinea">Guinea</option> 
					<option value="Guinea-bissau">Guinea-bissau</option> 
					<option value="Guyana">Guyana</option> 
					<option value="Haiti">Haiti</option> 
					<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
					<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
					<option value="Honduras">Honduras</option> 
					<option value="Hong Kong">Hong Kong</option> 
					<option value="Hungary">Hungary</option> 
					<option value="Iceland">Iceland</option> 
					<option value="India">India</option> 
					<option value="Indonesia">Indonesia</option> 
					<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					<option value="Iraq">Iraq</option> 
					<option value="Ireland">Ireland</option> 
					<option value="Israel">Israel</option> 
					<option value="Italy">Italy</option> 
					<option value="Jamaica">Jamaica</option> 
					<option value="Japan">Japan</option> 
					<option value="Jordan">Jordan</option> 
					<option value="Kazakhstan">Kazakhstan</option> 
					<option value="Kenya">Kenya</option> 
					<option value="Kiribati">Kiribati</option> 
					<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
					<option value="Korea, Republic of">Korea, Republic of</option> 
					<option value="Kuwait">Kuwait</option> 
					<option value="Kyrgyzstan">Kyrgyzstan</option> 
					<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					<option value="Latvia">Latvia</option> 
					<option value="Lebanon">Lebanon</option> 
					<option value="Lesotho">Lesotho</option> 
					<option value="Liberia">Liberia</option> 
					<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					<option value="Liechtenstein">Liechtenstein</option> 
					<option value="Lithuania">Lithuania</option> 
					<option value="Luxembourg">Luxembourg</option> 
					<option value="Macao">Macao</option> 
					<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
					<option value="Madagascar">Madagascar</option> 
					<option value="Malawi">Malawi</option> 
					<option value="Malaysia">Malaysia</option> 
					<option value="Maldives">Maldives</option> 
					<option value="Mali">Mali</option> 
					<option value="Malta">Malta</option> 
					<option value="Marshall Islands">Marshall Islands</option> 
					<option value="Martinique">Martinique</option> 
					<option value="Mauritania">Mauritania</option> 
					<option value="Mauritius">Mauritius</option> 
					<option value="Mayotte">Mayotte</option> 
					<option value="Mexico">Mexico</option> 
					<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
					<option value="Moldova, Republic of">Moldova, Republic of</option> 
					<option value="Monaco">Monaco</option> 
					<option value="Mongolia">Mongolia</option> 
					<option value="Montserrat">Montserrat</option> 
					<option value="Morocco">Morocco</option> 
					<option value="Mozambique">Mozambique</option> 
					<option value="Myanmar">Myanmar</option> 
					<option value="Namibia">Namibia</option> 
					<option value="Nauru">Nauru</option> 
					<option value="Nepal">Nepal</option> 
					<option value="Netherlands">Netherlands</option> 
					<option value="Netherlands Antilles">Netherlands Antilles</option> 
					<option value="New Caledonia">New Caledonia</option> 
					<option value="New Zealand">New Zealand</option> 
					<option value="Nicaragua">Nicaragua</option> 
					<option value="Niger">Niger</option> 
					<option value="Nigeria">Nigeria</option> 
					<option value="Niue">Niue</option> 
					<option value="Norfolk Island">Norfolk Island</option> 
					<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					<option value="Norway">Norway</option> 
					<option value="Oman">Oman</option> 
					<option value="Pakistan">Pakistan</option> 
					<option value="Palau">Palau</option> 
					<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
					<option value="Panama">Panama</option> 
					<option value="Papua New Guinea">Papua New Guinea</option> 
					<option value="Paraguay">Paraguay</option> 
					<option value="Peru">Peru</option> 
					<option value="Philippines">Philippines</option> 
					<option value="Pitcairn">Pitcairn</option> 
					<option value="Poland">Poland</option> 
					<option value="Portugal">Portugal</option> 
					<option value="Puerto Rico">Puerto Rico</option> 
					<option value="Qatar">Qatar</option> 
					<option value="Reunion">Reunion</option> 
					<option value="Romania">Romania</option> 
					<option value="Russian Federation">Russian Federation</option> 
					<option value="Rwanda">Rwanda</option> 
					<option value="Saint Helena">Saint Helena</option> 
					<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					<option value="Saint Lucia">Saint Lucia</option> 
					<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
					<option value="Samoa">Samoa</option> 
					<option value="San Marino">San Marino</option> 
					<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					<option value="Saudi Arabia">Saudi Arabia</option> 
					<option value="Senegal">Senegal</option> 
					<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
					<option value="Seychelles">Seychelles</option> 
					<option value="Sierra Leone">Sierra Leone</option> 
					<option value="Singapore">Singapore</option> 
					<option value="Slovakia">Slovakia</option> 
					<option value="Slovenia">Slovenia</option> 
					<option value="Solomon Islands">Solomon Islands</option> 
					<option value="Somalia">Somalia</option> 
					<option value="South Africa">South Africa</option> 
					<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
					<option value="Spain">Spain</option> 
					<option value="Sri Lanka">Sri Lanka</option> 
					<option value="Sudan">Sudan</option> 
					<option value="Suriname">Suriname</option> 
					<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					<option value="Swaziland">Swaziland</option> 
					<option value="Sweden">Sweden</option> 
					<option value="Switzerland">Switzerland</option> 
					<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
					<option value="Tajikistan">Tajikistan</option> 
					<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					<option value="Thailand">Thailand</option> 
					<option value="Timor-leste">Timor-leste</option> 
					<option value="Togo">Togo</option> 
					<option value="Tokelau">Tokelau</option> 
					<option value="Tonga">Tonga</option> 
					<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					<option value="Tunisia">Tunisia</option> 
					<option value="Turkey">Turkey</option> 
					<option value="Turkmenistan">Turkmenistan</option> 
					<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					<option value="Tuvalu">Tuvalu</option> 
					<option value="Uganda">Uganda</option> 
					<option value="Ukraine">Ukraine</option> 
					<option value="United Arab Emirates">United Arab Emirates</option> 
					<option value="United Kingdom">United Kingdom</option> 
					<option value="United States">United States</option> 
					<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
					<option value="Uruguay">Uruguay</option> 
					<option value="Uzbekistan">Uzbekistan</option> 
					<option value="Vanuatu">Vanuatu</option> 
					<option value="Venezuela">Venezuela</option> 
					<option value="Viet Nam">Viet Nam</option> 
					<option value="Virgin Islands, British">Virgin Islands, British</option> 
					<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					<option value="Wallis and Futuna">Wallis and Futuna</option> 
					<option value="Western Sahara">Western Sahara</option> 
					<option value="Yemen">Yemen</option> 
					<option value="Zambia">Zambia</option> 
					<option value="Zimbabwe">Zimbabwe</option>
				</select>
	            <input type="text" name="phone_company" class="form-control" placeholder="Number Telphone">
	            <input type="email" name="email_company" class="form-control" placeholder="Email">
	            <input type="text" name="fax" class="form-control" placeholder="Fax">
	            <input type="url" name="company_url" class="form-control" placeholder="Website">
	            <input type="text" name="product_interest" class="form-control" placeholder="Product Interest"><hr>
	            <p>Akun</p>
	            <input type="text" name="username" class="form-control" placeholder="Username">
	            <input type="password" name="password" class="form-control" placeholder="Password"><hr>
	            <p>Person</p>
	            <input type="text" name="fullname" class="form-control" placeholder="Full Name">
	            <input type="text" name="phone_person" class="form-control" placeholder="Phone">
	            <input type="email" name="email_person" class="form-control" placeholder="Email">
	            <select name="id_level" class="form-control">
	            	<?php 
	            	$sqlLevel = "select * from level";
	            	$queryLevel = mysql_query($sqlLevel);
	            	while ($level = mysql_fetch_array($queryLevel)) {
	            		echo "<option value='$level[id_level]'>$level[nama]</option>";
	            	}
	            	?>	            	
	            </select>

	            <div id="info"></div>
	            <div class="hidden">
		            <input type="text" name="id_level" />
		            <input type="text" name="statusTombol" />
	            </div>
	        </div>
	        <div class="modal-footer">
	            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
	            <input type="submit" value="Save" class="btn btn-primary" />
	        </div>
        </form>
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
    
    //perintah input
   	    $("#newData").click(function(){
   	    	
   	    	$("[name=statusTombol]").val("simpan");
   	    });
   	    
   	//perintah edit
   		$("#btn-edit").click(function(){
    		var id_level = $(".pilih .id_level").html();
            var nama = $(".pilih .nama").html();
            console.log(id_level+nama);
            
            $("[name=statusTombol]").val("update");            
    	});

   	//form eksekusi input dan edit dengan ajax
    	$("[name=formLevel]").submit(function(e){
			e.preventDefault(); // mencegah default. defaultnya form itu ngeload ke action tapi dibatalkan dengan fungsi ini
			var id_level=$("[name='id_level']").val();
			var nama=$("[name='nama']").val();
			var statusTombol=$("[name='statusTombol']").val();
			console.log(nama);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/level.php",
			  data:"id_level="+id_level+"&nama="+nama+"&statusTombol="+statusTombol,
			  success:function(data){
			  	console.log(data);
			  	if(data != 0){
			  		var loading = "<img src='assets/images/loading.gif' width='50'> Wait for a second..";
			  		var url = "<meta http-equiv=\"refresh\" content=\"1; url=?p=<?php echo $p;?>\" />";
			    	$("#info").append(loading+url);
			  	}else{
			    	var failed = "<i class='glyphicon glyphicon-remove'> There is something wrong. Try again.."
			    	$("#info").append(failed);			  		
			  	}
			  }

			});
        });        

    //perintah Hapus
    	$("#btn-delete").click(function(){
    		var id_level = $(".pilih .id_level").html();
            var nama = $(".pilih .nama").html();
            console.log(id_level+nama);
            $(".isi").html(nama);
            $("[name=deleteData] .id").html("<input type='hidden' name='id' value='"+id_level+"'>");
    	});

        $("[name=deleteData]").submit(function(e){
        	e.preventDefault();
			var id_level=$("[name='id']").val();
			var statusTombol="hapus";
			console.log(id_level);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/level.php",
			  data:"id_level="+id_level+"&statusTombol="+statusTombol,
			  success:function(data){
			  	console.log(data);
			  	if(data != 0){
			  		var url = "<meta http-equiv=\"refresh\" content=\"1; url=?p=<?php echo $p;?>\" />";
			    	$("#info").append(url);
			  	}else{
			    	var failed = "<i class='glyphicon glyphicon-remove'> There is something wrong. Try again.."
			    	$("#info").append(failed);			  		
			  	}
			  }

			});
        });

   });
</script>
