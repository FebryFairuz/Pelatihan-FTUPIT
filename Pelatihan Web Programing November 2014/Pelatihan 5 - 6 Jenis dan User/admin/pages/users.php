<?php 
$sqlTampil = "SELECT * FROM `users` ORDER BY id_user ASC";
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
		      <th>Username</th>
		      <th>Full Name</th>
		      <th>Company Name</th>
		      <th>Level</th>
		    </tr>
		  </thead>
		  <tbody>
	      <?php 
	      	if($jmlTampil > 0){
	      		$no = 0;
	      		while($user = mysql_fetch_array($queryTampil)){
		  ?>
				    <tr>
				      <td><?php echo $no+1; ?></td>
				      <td><span class="username"><?php echo $user['username'] ?></span>
				      	  <div hidden>
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
					      	  <span class="id_level"><?php echo $user['id_level'] ?></span>
				      	  </div>
				      </td>
				      <td><span class="fullname"><?php echo $user['fullname'] ?></span></td>
				      <td><span class="company_name"><?php echo $user['company_name'] ?></span></td>
				      <td>
				      	<!-- memanggil dari tabel level -->
				      	<?php 
				      	$sqlLevel = "SELECT * FROM `level` where id_level = '$user[id_level]'";
				      	$queryLevel = mysql_query($sqlLevel);
				      	$l = mysql_fetch_array($queryLevel);
				      	echo "<span>$l[nama]</span>";
				      	?>

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
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Form <?php echo ucwords($p); ?></h3>
        </div>
        <form action="" method="post" id="formUser" name="formUser" autocomplete="off">        	
	        <div class="modal-body panel-modal-scrol">
	            <p>Company Profile</p>
	            <input type="text" name="company_name" class="form-control required" minlength="3" maxlength="50" placeholder="Company Name">
	            <textarea name="address" class="form-control required" placeholder="Alamat"></textarea>
	            <input type="text" name="city" class="form-control required" minlength="4" maxlength="50" placeholder="City">
	            <input type="text" name="postal" class="form-control required" minlength="5" maxlength="5" placeholder="Postal">
	            <input type="text" name="province" class="form-control required" minlength="5" maxlength="20" placeholder="Province">
	            <select name="country" class="form-control required"> 
					<option value="" selected>Select Country</option>
					<option value="AF">Afghanistan</option>
					<option value="AX">Åland Islands</option>
					<option value="AL">Albania</option>
					<option value="DZ">Algeria</option>
					<option value="AS">American Samoa</option>
					<option value="AD">Andorra</option>
					<option value="AO">Angola</option>
					<option value="AI">Anguilla</option>
					<option value="AQ">Antarctica</option>
					<option value="AG">Antigua and Barbuda</option>
					<option value="AR">Argentina</option>
					<option value="AM">Armenia</option>
					<option value="AW">Aruba</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="AZ">Azerbaijan</option>
					<option value="BS">Bahamas</option>
					<option value="BH">Bahrain</option>
					<option value="BD">Bangladesh</option>
					<option value="BB">Barbados</option>
					<option value="BY">Belarus</option>
					<option value="BE">Belgium</option>
					<option value="BZ">Belize</option>
					<option value="BJ">Benin</option>
					<option value="BM">Bermuda</option>
					<option value="BT">Bhutan</option>
					<option value="BO">Bolivia, Plurinational State of</option>
					<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
					<option value="BA">Bosnia and Herzegovina</option>
					<option value="BW">Botswana</option>
					<option value="BV">Bouvet Island</option>
					<option value="BR">Brazil</option>
					<option value="IO">British Indian Ocean Territory</option>
					<option value="BN">Brunei Darussalam</option>
					<option value="BG">Bulgaria</option>
					<option value="BF">Burkina Faso</option>
					<option value="BI">Burundi</option>
					<option value="KH">Cambodia</option>
					<option value="CM">Cameroon</option>
					<option value="CA">Canada</option>
					<option value="CV">Cape Verde</option>
					<option value="KY">Cayman Islands</option>
					<option value="CF">Central African Republic</option>
					<option value="TD">Chad</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CX">Christmas Island</option>
					<option value="CC">Cocos (Keeling) Islands</option>
					<option value="CO">Colombia</option>
					<option value="KM">Comoros</option>
					<option value="CG">Congo</option>
					<option value="CD">Congo, the Democratic Republic of the</option>
					<option value="CK">Cook Islands</option>
					<option value="CR">Costa Rica</option>
					<option value="CI">Côte d'Ivoire</option>
					<option value="HR">Croatia</option>
					<option value="CU">Cuba</option>
					<option value="CW">Curaçao</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DJ">Djibouti</option>
					<option value="DM">Dominica</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC">Ecuador</option>
					<option value="EG">Egypt</option>
					<option value="SV">El Salvador</option>
					<option value="GQ">Equatorial Guinea</option>
					<option value="ER">Eritrea</option>
					<option value="EE">Estonia</option>
					<option value="ET">Ethiopia</option>
					<option value="FK">Falkland Islands (Malvinas)</option>
					<option value="FO">Faroe Islands</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="GF">French Guiana</option>
					<option value="PF">French Polynesia</option>
					<option value="TF">French Southern Territories</option>
					<option value="GA">Gabon</option>
					<option value="GM">Gambia</option>
					<option value="GE">Georgia</option>
					<option value="DE">Germany</option>
					<option value="GH">Ghana</option>
					<option value="GI">Gibraltar</option>
					<option value="GR">Greece</option>
					<option value="GL">Greenland</option>
					<option value="GD">Grenada</option>
					<option value="GP">Guadeloupe</option>
					<option value="GU">Guam</option>
					<option value="GT">Guatemala</option>
					<option value="GG">Guernsey</option>
					<option value="GN">Guinea</option>
					<option value="GW">Guinea-Bissau</option>
					<option value="GY">Guyana</option>
					<option value="HT">Haiti</option>
					<option value="HM">Heard Island and McDonald Islands</option>
					<option value="VA">Holy See (Vatican City State)</option>
					<option value="HN">Honduras</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="ID">Indonesia</option>
					<option value="IR">Iran, Islamic Republic of</option>
					<option value="IQ">Iraq</option>
					<option value="IE">Ireland</option>
					<option value="IM">Isle of Man</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="JE">Jersey</option>
					<option value="JO">Jordan</option>
					<option value="KZ">Kazakhstan</option>
					<option value="KE">Kenya</option>
					<option value="KI">Kiribati</option>
					<option value="KP">Korea, Democratic People's Republic of</option>
					<option value="KR">Korea, Republic of</option>
					<option value="KW">Kuwait</option>
					<option value="KG">Kyrgyzstan</option>
					<option value="LA">Lao People's Democratic Republic</option>
					<option value="LV">Latvia</option>
					<option value="LB">Lebanon</option>
					<option value="LS">Lesotho</option>
					<option value="LR">Liberia</option>
					<option value="LY">Libya</option>
					<option value="LI">Liechtenstein</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MO">Macao</option>
					<option value="MK">Macedonia, the former Yugoslav Republic of</option>
					<option value="MG">Madagascar</option>
					<option value="MW">Malawi</option>
					<option value="MY">Malaysia</option>
					<option value="MV">Maldives</option>
					<option value="ML">Mali</option>
					<option value="MT">Malta</option>
					<option value="MH">Marshall Islands</option>
					<option value="MQ">Martinique</option>
					<option value="MR">Mauritania</option>
					<option value="MU">Mauritius</option>
					<option value="YT">Mayotte</option>
					<option value="MX">Mexico</option>
					<option value="FM">Micronesia, Federated States of</option>
					<option value="MD">Moldova, Republic of</option>
					<option value="MC">Monaco</option>
					<option value="MN">Mongolia</option>
					<option value="ME">Montenegro</option>
					<option value="MS">Montserrat</option>
					<option value="MA">Morocco</option>
					<option value="MZ">Mozambique</option>
					<option value="MM">Myanmar</option>
					<option value="NA">Namibia</option>
					<option value="NR">Nauru</option>
					<option value="NP">Nepal</option>
					<option value="NL">Netherlands</option>
					<option value="NC">New Caledonia</option>
					<option value="NZ">New Zealand</option>
					<option value="NI">Nicaragua</option>
					<option value="NE">Niger</option>
					<option value="NG">Nigeria</option>
					<option value="NU">Niue</option>
					<option value="NF">Norfolk Island</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="NO">Norway</option>
					<option value="OM">Oman</option>
					<option value="PK">Pakistan</option>
					<option value="PW">Palau</option>
					<option value="PS">Palestinian Territory, Occupied</option>
					<option value="PA">Panama</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PY">Paraguay</option>
					<option value="PE">Peru</option>
					<option value="PH">Philippines</option>
					<option value="PN">Pitcairn</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="PR">Puerto Rico</option>
					<option value="QA">Qatar</option>
					<option value="RE">Réunion</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="BL">Saint Barthélemy</option>
					<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
					<option value="KN">Saint Kitts and Nevis</option>
					<option value="LC">Saint Lucia</option>
					<option value="MF">Saint Martin (French part)</option>
					<option value="PM">Saint Pierre and Miquelon</option>
					<option value="VC">Saint Vincent and the Grenadines</option>
					<option value="WS">Samoa</option>
					<option value="SM">San Marino</option>
					<option value="ST">Sao Tome and Principe</option>
					<option value="SA">Saudi Arabia</option>
					<option value="SN">Senegal</option>
					<option value="RS">Serbia</option>
					<option value="SC">Seychelles</option>
					<option value="SL">Sierra Leone</option>
					<option value="SG">Singapore</option>
					<option value="SX">Sint Maarten (Dutch part)</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Islands</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="GS">South Georgia and the South Sandwich Islands</option>
					<option value="SS">South Sudan</option>
					<option value="ES">Spain</option>
					<option value="LK">Sri Lanka</option>
					<option value="SD">Sudan</option>
					<option value="SR">Suriname</option>
					<option value="SJ">Svalbard and Jan Mayen</option>
					<option value="SZ">Swaziland</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="TW">Taiwan, Province of China</option>
					<option value="TJ">Tajikistan</option>
					<option value="TZ">Tanzania, United Republic of</option>
					<option value="TH">Thailand</option>
					<option value="TL">Timor-Leste</option>
					<option value="TG">Togo</option>
					<option value="TK">Tokelau</option>
					<option value="TO">Tonga</option>
					<option value="TT">Trinidad and Tobago</option>
					<option value="TN">Tunisia</option>
					<option value="TR">Turkey</option>
					<option value="TM">Turkmenistan</option>
					<option value="TC">Turks and Caicos Islands</option>
					<option value="TV">Tuvalu</option>
					<option value="UG">Uganda</option>
					<option value="UA">Ukraine</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="UY">Uruguay</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VU">Vanuatu</option>
					<option value="VE">Venezuela, Bolivarian Republic of</option>
					<option value="VN">Viet Nam</option>
					<option value="VG">Virgin Islands, British</option>
					<option value="VI">Virgin Islands, U.S.</option>
					<option value="WF">Wallis and Futuna</option>
					<option value="EH">Western Sahara</option>
					<option value="YE">Yemen</option>
					<option value="ZM">Zambia</option>
					<option value="ZW">Zimbabwe</option>
				</select>
	            <input type="text" name="phone_company" class="form-control required" minlength="12" maxlength="20" placeholder="Number Telphone">
	            <input type="email" name="email_company" class="form-control required" minlength="10" maxlength="30" placeholder="Email">
	            <input type="text" name="fax" class="form-control required" minlength="6" maxlength="20" placeholder="Fax">
	            <input type="url" name="company_url" class="form-control required" minlength="10" maxlength="50" placeholder="Website">
	            <input type="text" name="product_interest" class="form-control required" minlength="5" maxlength="30" placeholder="Product Interest"><hr>
	            <p>Akun</p>
	            <input type="text" name="username" class="form-control required" minlength="5" maxlength="10" placeholder="Username">
	            <input type="password" name="password" class="form-control required" minlength="5" maxlength="10" placeholder="Password"><hr>
	            <p>Person</p>
	            <input type="text" name="fullname" class="form-control required" minlength="5" maxlength="50" placeholder="Full Name">
	            <input type="text" name="phone_person" class="form-control required" minlength="12" maxlength="20" placeholder="Phone">
	            <input type="email" name="email_person" class="form-control required" minlength="10" maxlength="30" placeholder="Email">
	            <select name="id_level" class="form-control required">
	            	<option value="">Select Level</option>
	            	<?php 
	            	$sqlLevel = "select * from level";
	            	$queryLevel = mysql_query($sqlLevel);
	            	while ($level = mysql_fetch_array($queryLevel)) {
	            		echo "<option value='$level[id_level]'>$level[nama]</option>";
	            	}
	            	?>	            	
	            </select>

	            <div class="hidden">
		            <input type="text" name="id_user" />
		            <input type="text" name="statusTombol" />
	            </div>
	        </div>
            <div id="info"></div>
	        <div class="modal-footer">
	            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
	            <input type="submit" value="Save" id="btn-saving" class="btn btn-primary" />
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
    //validasi
	    $("[name=formUser]").validate({
	        rules:{nama:"required"},
	        messages:{ 
	                username: {
		                    required:"<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 5 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 10 charackter"
	                },
	                password: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 5 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 10 charackter"
	                },
	                fullname: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 5 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 50 charackter"
	                },
	                email_person: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 10 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 30 charackter"
	                },
	                phone_person: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 12 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 20 charackter"
	                },
	                id_level: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                company_name: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 3 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 50 charackter"
	                },
	                address: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },
	                country: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty"
	                },

	                city: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 4 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 50 charackter"
	                },
	                postal: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 5 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 5 charackter"
	                },
	                province: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 4 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 20 charackter"
	                },
	                email_company: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 10 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 30 charackter"
	                },
	                phone_company: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 12 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 20 charackter"
	                },
	                fax: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 6 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 20 charackter"
	                },
	                company_url: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 10 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 50 charackter"
	                },
	                product_interest: {
		                    required: "<span class='glyphicon glyphicon-remove'></span> Can't be empty",
		                    minlength:"<span class='glyphicon glyphicon-remove'></span> minimal 5 charackter",
		                    maxlength:"<span class='glyphicon glyphicon-remove'></span> maximal 30 charackter"
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
   	    	$("[name=statusTombol]").val("simpan");

   	    	$("[name=id_user]").val("");
            $("[name=username]").val("");
            $("[name=password]").val("");
            $("[name=fullname]").val("");
            $("[name=phone_person]").val("");
            $("[name=email_person]").val("");
            //$("[name=id_level]").val("");

            $("[name=company_name]").val("");
            $("[name=address]").val("");
            $("[name=city]").val("");
            $("[name=postal]").val("");
            $("[name=province]").val("");
            //$("[name=country]").val("null");
            $("[name=phone_company]").val("");
            $("[name=email_company]").val("");
            $("[name=fax]").val("");
            $("[name=company_url]").val("");
            $("[name=product_interest]").val("");
   	    });
   	    
   	//perintah edit
   		$("#btn-edit").click(function(){
   			//mengambil nilai
    		var id_user = $(".pilih .id_user").html();
            var username = $(".pilih .username").html();
            var password = $(".pilih .password").html();
            var address = $(".pilih .address").html();
            var city = $(".pilih .city").html();
            var postal = $(".pilih .postal").html();
            var province = $(".pilih .province").html();
            var country = $(".pilih .country").html();
            var phone_company = $(".pilih .phone_company").html();
            var email_company = $(".pilih .email_company").html();
            var fax = $(".pilih .fax").html();
            var company_url = $(".pilih .company_url").html();
            var product_interest = $(".pilih .product_interest").html();
            var phone_person = $(".pilih .phone_person").html();
            var email_person = $(".pilih .email_person").html();
            var fullname = $(".pilih .fullname").html();
            var company_name = $(".pilih .company_name").html();
            var id_level = $(".pilih .id_level").html();

            //mengisikan kedalam form
            $("[name=id_user]").val(id_user);
            $("[name=username]").val(username);
            $("[name=password]").val(password);
            $("[name=fullname]").val(fullname);
            $("[name=phone_person]").val(phone_person);
            $("[name=email_person]").val(email_person);
            //$("[name=id_level]").val(id_level);

            $("[name=company_name]").val(company_name);
            $("[name=address]").val(address);
            $("[name=city]").val(city);
            $("[name=postal]").val(postal);
            $("[name=province]").val(province);
            //$("[name=country]").val(country);
            $("[name=phone_company]").val(phone_company);
            $("[name=email_company]").val(email_company);
            $("[name=fax]").val(fax);
            $("[name=company_url]").val(company_url);
            $("[name=product_interest]").val(product_interest);


            $("[name=statusTombol]").val("update");
	    	$("#btn-saving").prop('disabled', false);
    	});

   	//form eksekusi input dan edit dengan ajax
    	$("[name=formUser]").submit(function(e){
			e.preventDefault(); 
			var formData = $(this).serialize();
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'proses/user.php',
			   data: formData, 
			   success: function(data){
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
    		var id_user = $(".pilih .id_user").html();
            var nama = $(".pilih .nama").html();
            console.log(id_user+nama);
            $(".isi").html(nama);
            $("[name=deleteData] .id").html("<input type='hidden' name='id' value='"+id_user+"'>");
    	});

        $("[name=deleteData]").submit(function(e){
        	e.preventDefault();
			var id_user=$("[name='id']").val();
			var statusTombol="hapus";
			console.log(id_user);
			console.log(statusTombol);
			$.ajax({
			  type:"post",
			  url:"proses/user.php",
			  data:"id_user="+id_user+"&statusTombol="+statusTombol,
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
