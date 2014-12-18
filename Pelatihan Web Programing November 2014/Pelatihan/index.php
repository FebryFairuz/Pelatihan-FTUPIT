<?php 
session_start();
include "config/koneksi.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Shop">
    <meta name="author" content="Febry Fairuz Foundation">
    <title>Online Shop</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="dist/css/animate.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    
	<script src="dist/js/jquery-2.1.1.min.js"></script>
	<script src="dist/js/bootstrap.js"></script>
	<script src="dist/js/jquery.scrollUp.min.js"></script>
</head>
<body>
<header>
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href=""><i class="fa fa-phone"></i> +6221 1234 5678</a></li>
							<li><a href=""><i class="fa fa-envelope"></i> info@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-middle"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index.html"><img src="dist-2/img/cooperation/corp1.png" alt=""></a>
						</div>
					</div>
					<div class="col-sm-10">
						<div class="shop-menu">
							<form action="" name="formSearch">
								<input type="search" class="txt-search" name="kataKunci" placeholder="Search produk, news or event" />
								<input type="submit" class="btn-search" value="Search">
							</form>
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-crosshairs"></i> Your List</a></li>
								<li><a href=""><i class="fa fa-shopping-cart"></i> Cart: 0 item</a></li>
								<?php if(!empty($_SESSION['username'])){ ?>
								<li><input type="hidden" class="id_session" name="id_user" value="<?= $_SESSION['id_user'] ?>">
									<a href="#modalForm" id="editProfile" role="button" data-toggle="modal"><i class="fa fa-user"></i> Hi, <?= ucwords($_SESSION['username']); ?></a></li>
								<li><a href="admin/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
								<?php }else{ ?>
								<li><a href="admin/login.php"><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="" class="active">Home</a></li>
							<li class="dropdown"><a href="#">About Us<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="">General</a></li>
									<li><a href="">Job Vacancies</a></li> 
									<li><a href="">Opportunity</a></li> 
                                </ul>
                            </li> 
							<li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="">Analitical</a></li>
									<li><a href="">General</a></li>
									<li><a href="">Life</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Services<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="">Equipment</a></li>
									<li><a href="">Services</a></li>
                                </ul>
                            </li>
							<li><a href="">News &amp; Event</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<section id="slider">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-12">
								<img src="dist/img/slide/pic1.jpg" class="img-slide img-responsive" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-12">
								<img src="dist/img/slide/pic2.jpg" class="img-slide img-responsive" alt="" />
							</div>
						</div>
						
						<div class="item">
							<!-- <div class="col-sm-6">
								<h1>Koala</h1>
								<p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla .</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div> -->
							<div class="col-sm-12">
								<img src="dist/img/slide/pic3.jpg" class="img-slide img-responsive" alt="" />
							</div>
						</div>
						
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#sportswear" class="collapsed">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Sportswear
									</a>
								</h4>
							</div>
							<div id="sportswear" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul>
										<li><a href="#">Nike </a></li>
										<li><a href="#">Under Armour </a></li>
										<li><a href="#">Adidas </a></li>
										<li><a href="#">Puma</a></li>
										<li><a href="#">ASICS </a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#mens" class="collapsed">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Mens
									</a>
								</h4>
							</div>
							<div id="mens" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul>
										<li><a href="#">Fendi</a></li>
										<li><a href="#">Guess</a></li>
										<li><a href="#">Valentino</a></li>
										<li><a href="#">Dior</a></li>
										<li><a href="#">Versace</a></li>
										<li><a href="#">Armani</a></li>
										<li><a href="#">Prada</a></li>
										<li><a href="#">Dolce and Gabbana</a></li>
										<li><a href="#">Chanel</a></li>
										<li><a href="#">Gucci</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#womens" class="collapsed">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Womens
									</a>
								</h4>
							</div>
							<div id="womens" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul>
										<li><a href="#">Fendi</a></li>
										<li><a href="#">Guess</a></li>
										<li><a href="#">Valentino</a></li>
										<li><a href="#">Dior</a></li>
										<li><a href="#">Versace</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="#">Kids</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="#">Fashion</a></h4>
							</div>
						</div>
					</div><!--/category-products-->
				 	<br>
					<div class="brands_products"><!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
								<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
								<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
							</ul>
						</div>
					</div><!--/brands_products-->			
				</div>
			</div>
			<div class="col-sm-9">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<?php for ($i=1; $i <= 6; $i++) { ?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="dist/img/product<?= $i;?>.jpg" alt="">
									<p>QuincyLabel Top Man 2 Jacket - Hitam</p>
									<p class="bold">Rp <?= $i;?>00.000,-</p>
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href=""><i class="glyphicon glyphicon-tag"></i>View product</a></li>
									<li><a href=""><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</section>

<footer id="footer" >
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div class="single-widget">
						<h2>Service</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="">Equipment</a></li>
							<li><a href="">Services</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="single-widget">
						<h2>Products</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="">Analitical</a></li>
							<li><a href="">General</a></li>
							<li><a href="">Life</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="single-widget">
						<h2>PROMO</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="">News</a></li>
							<li><a href="">Event</a></li> 
						</ul>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="single-widget">
						<h2>About Us</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="">General</a></li>
							<li><a href="">Job Vacancies</a></li> 
							<li><a href="">Opportunity</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="single-widget">
						<h2>LAYANAN PELANGGAN</h2>
						<p> Ada pertanyaan? Hubungi kami 021 12345678<br>
							Senin-Jumat: 09.00 - 23.00<br>
							Sabtu, Minggu & Hari Libur: 09.00 - 17.00</p>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="single-widget pull-left">
						<div class="col-sm-4 col-xs-4 orange">
							<br><center><span class="iconic">Rp</span></center>
							<center>Cash on Delivery <br>Master Card</center><br>
						</div>
						<div class="col-sm-4 col-xs-4 aqua">
							<br><center><span class="iconic"><i class="glyphicon glyphicon-road"></i></span></center>
							<center>Biaya Pengiriman Gratis</center><br>
						</div>
						<div class="col-sm-4 col-xs-4 blue">
							<br><center><span class="iconic"><i class="glyphicon glyphicon-refresh"></i></span></center>
							<center>Jaminan Barang Dikembalikan</center><br>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Produk Ternama</h2>
						<div class="col-sm-3 col-xs-3">
							<img src="dist/img/merek/merk1.png" data-toggle="tooltip" data-placement="bottom" title="DC" width="50" />
						</div>
						<div class="col-sm-3 col-xs-3">
							<img src="dist/img/merek/merk2.png" data-toggle="tooltip" data-placement="bottom" title="Macbeth" width="50" />
						</div>
						<div class="col-sm-3 col-xs-3">
							<img src="dist/img/merek/merk1.png" data-toggle="tooltip" data-placement="bottom" title="DC" width="50" />
						</div>
						<div class="col-sm-3 col-xs-3">
							<img src="dist/img/merek/merk2.png" data-toggle="tooltip" data-placement="bottom" title="Macbeth" width="50" />
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p>Copyright © 2014 Febry Fairuz Foundation <br> Designed by <span><a target="_blank" href="http://www.febryfairuz.hol.es">Febry Damatraseta Fairuz</a></span></p>
			</div>
		</div>
	</div>
</footer>

<!-- MODAL FORM -->
<div class="modal fade bs-example-modal-lg" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Edit your Account</h3>
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
                    <input type="text" name="id_user" value="<?= $_SESSION['id_user'] ?>" />
                    <input type="text" name="id_level" value="4" />
                    <input type="text" name="statusTombol" value="update" />
                </div>
            </div>
            <div id="info"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <input type="submit" value="Update" id="btn-saving" class="btn btn-primary" />
            </div>
        </form>
    </div>
  </div>
</div>




<script type="text/javascript">
	$(document).ready(function(){
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();

			$.scrollUp({
		        scrollName: 'scrollUp', // Element ID
		        scrollDistance: 300, // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top', // 'top' or 'bottom'
		        scrollSpeed: 300, // Speed back to top (ms)
		        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
		        animation: 'fade', // Fade, slide, none
		        animationSpeed: 200, // Animation in speed (ms)
		        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
						//scrollTarget: false, // Set a custom target element for scrolling to the top
		        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
		        scrollTitle: false, // Set a custom <a> title if required.
		        scrollImg: false, // Set true to use image
		        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		        zIndex: 2147483647 // Z-Index for the overlay
			});
		});

		$("#editProfile").click(function(){
			var id_user = $(".id_session").val();
			console.log(id_user);

			$.ajax({
			  type:"post",
			  url:"admin/proses/user.php",
			  data:"id_user="+id_user+"&statusTombol=getData",
			  dataType: 'json',
			  success:function(data){
			  	console.log(data);

		  	//mengisikan data ke dalam database
	        	$("[name=id_user]").val(data.id_user);
	        	$("[name=username]").val(data.username);
	        	$("[name=password]").val(data.password);
	            $("[name=fullname]").val(data.fullname);
	            $("[name=phone_person]").val(data.phone_person);
	            $("[name=email_person]").val(data.email_person);
	            //$("[name=id_level]").val(data.id_level);

	            $("[name=company_name]").val(data.company_name);
	            $("[name=address]").val(data.address);
	            $("[name=city]").val(data.city);
	            $("[name=postal]").val(data.postal);
	            $("[name=province]").val(data.province);
	            //$("[name=country]").val(data.country);
	            $("[name=phone_company]").val(data.phone_company);
	            $("[name=email_company]").val(data.email_company);
	            $("[name=fax]").val(data.fax);
	            $("[name=company_url]").val(data.company_url);
	            $("[name=product_interest]").val(data.product_interest);

	            $("[name=statusTombol]").val("update");
		    	$("#btn-saving").prop('disabled', false);
			  }

			});
		});

		$("[name=formUser]").submit(function(e){
			e.preventDefault(); 
			var formData = $(this).serialize();
			console.log(formData);

			$.ajax({
			   type: 'POST',
			   url: 'admin/proses/user.php',
			   data: formData, 
			   success: function(data){
			    console.log(data);
			    if(data != 0){
			  		var loading = "<img src='admin/assets/images/loading.gif' width='50'> Wait for a second..";
			    	
			    	$("#info").append(loading);
			    	setInterval(function() {
			      		var address = "?p=";
						$(location).attr('href',address);
	            	}, 2000);
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