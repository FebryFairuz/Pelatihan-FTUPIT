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
					<?php 
					$sqlBrands = "select * from brands order by nama ASC";
					$queryBrands = mysql_query($sqlBrands);
					$jmlBrands = mysql_num_rows($queryBrands);
					if($jmlBrands > 0){
						while ($brands = mysql_fetch_array($queryBrands)) {
							echo "<li><a><span class='pull-right'>(10)</span> $brands[nama]</a></li>";
						}
					}
					?>
				</ul>
			</div>
		</div><!--/brands_products-->			
	</div>
</div>