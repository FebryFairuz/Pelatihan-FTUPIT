<?php 
session_start();
include "../config/koneksi.php";
if(!empty($_SESSION['username'])){
  header("location:index.php");
}else{
?>
<!doctype html>

<html lang="en"><head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/premium.css">
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
        .panel-body .label{
            display:block;
            background: orange;
        }
        .panel-modal-scrol{
            overflow: auto;
            max-height: 500px !important;
        }
    </style>

    <script src="assets/lib/jquery-2.1.1.min.js" type="text/javascript"></script>    
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="assets/lib/validasi/jquery.validate.js" type="text/javascript"></script>    
    <script src="assets/lib/jquery.backstretch.min.js" type="text/javascript"></script>    
    
</head>
<body class=" theme-blue">    
    <div class="dialog" style="margin-top:100px;">
        <div class="panel panel-default">
            <p class="panel-heading no-collapse">SIGN IN NOW</p>
            <div class="panel-body">
                <form autocomplete="off" method="post" action="ceklogin.php" id="formLogin">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control span12 required" autofocus minlength="5" maxlength="10" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control span12 form-control required" minlength="4" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Sign In" class="btn btn-primary btn-full">
                    </div><hr>
                    <div class="row">
                        <div class="col-sm-12">                            
                        <p align="center">Don't have an account yet?<br>
                           <a href="#modalForm" role="button" data-toggle="modal">Create an account</a></p>
                        <p><a href="../"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back to website</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style="font-size: .75em; margin-top: .25em;">Design By <a href="http://febryfairuz.hol.es" target="_blank">Febry Fairuz Foundation</a></p>
        <p style="font-size: .75em; margin-top: .25em;">© 2014</p>
    </div>

<!-- modal register -->
<div class="modal fade bs-example-modal-lg" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Create an Account</h3>
        </div>
        <form action="" method="post" id="formUser" name="formUser" autocomplete="off">         
            <div class="modal-body panel-modal-scrol">
                <p>Company Profile</p>
                <input type="text" name="company_name" class="form-control required" minlength="3" maxlength="50" placeholder="Company Name" required>
                <textarea name="address" class="form-control required" placeholder="Alamat" required></textarea>
                <input type="text" name="city" class="form-control required" minlength="4" maxlength="50" placeholder="City" required>
                <input type="text" name="postal" class="form-control required" minlength="5" maxlength="5" placeholder="Postal" required>
                <input type="text" name="province" class="form-control required" minlength="5" maxlength="20" placeholder="Province" required>
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
                <input type="text" name="phone_company" class="form-control required" minlength="12" maxlength="20" placeholder="Number Telphone" required>
                <input type="email" name="email_company" class="form-control required" minlength="10" maxlength="30" placeholder="Email" required>
                <input type="text" name="fax" class="form-control required" minlength="6" maxlength="20" placeholder="Fax" required>
                <input type="url" name="company_url" class="form-control required" minlength="10" maxlength="50" placeholder="Website">
                <input type="text" name="product_interest" class="form-control required" minlength="5" maxlength="30" placeholder="Product Interest" required><hr>
                <p>Akun</p>
                <input type="text" name="username" class="form-control required" minlength="5" maxlength="10" placeholder="Username" required>
                <input type="password" name="password" class="form-control required" minlength="5" maxlength="10" placeholder="Password" required><hr>
                <p>Person</p>
                <input type="text" name="fullname" class="form-control required" minlength="5" maxlength="50" placeholder="Full Name" required>
                <input type="text" name="phone_person" class="form-control required" minlength="12" maxlength="20" placeholder="Phone" required>
                <input type="email" name="email_person" class="form-control required" minlength="10" maxlength="30" placeholder="Email" required>
                <div hidden>
                    <input type="text" name="id_level" value="4" />
                    <input type="text" name="statusTombol" value="simpan" />
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

<script type="text/javascript">
    $(document).ready(function() {
        //$.backstretch("assets/images/a.jpg", {speed: 500});
        
        $("#formLogin").validate({
            rules:{ username:"required",
                    password:{required: true,maxlength:10}
                  },
            messages:{ 
                    username: {
                        required:'Username harus di isi',
                        minlength:'<span class="glyphicon glyphicon-remove"></span> Username minimal 5 karakter',
                        maxlength:'Username maximal 10 karakter'},
                    password: {
                        required :'Password harus di isi',
                        minlength:'Password minimal 6 karakter',
                        maxlength:'Password maximal 10 karakter'},
                    },
             success: function(label) {
                label.html("<i class='glyphicon glyphicon-ok'></i>").addClass('valid');}
        });

        //validasi form register
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
        
        //proses pendaftaran
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
                    var loading = "<img src='assets/images/loading.gif' width='50'> Success! Please Sign In Now.";
                    $("#info").append(loading);
                    setInterval(function() {
                        var address = "login.php";
                        $(location).attr('href',address);
                    }, 3000);
                }else{
                    var failed = "<i class='glyphicon glyphicon-remove'> There is something wrong. Try again.."
                    $("#info").append(failed);                  
                }             
               }
            });
        }); 
    });
</script>

</body>
</html>
<?php } ?>