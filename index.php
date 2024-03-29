<?php
include_once('function_index.php');
include_once('function.php');
include_once('function_product.php');
$products_shoes = product_shoes();
?>

<!DOCTYPE html>	
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all">
	<!--[if lte IE 6]>
		<style type="text/css" media="screen">
			.tabbed { height:420px; }
		</style>
	<![endif]-->
	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head><body>
<!-- Top -->
<div id="top">
	
	<div class="shell">
		
		<!-- Header -->
		<div id="header">
			<h1 id="logo"><a href="#">Urgan Gear</a></h1>
			<div id="navigation">
				<ul>
				    <li><a href="#">Home</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">The Store</a></li>
					<li class="last"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Slider -->
		<div id="slider">
			<div id="slider-holder">
				<div class="jcarousel-container jcarousel-container-horizontal" style="display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal"><ul class="jcarousel-list jcarousel-list-horizontal" style="width: 5880px; left: 0px;">
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style=""><a href="#"><img src="css/images/slide1.jpg" alt=""></a></li>
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style=""><a href="#"><img src="css/images/slide2.jpg" alt=""></a></li>
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style=""><a href="#"><img src="css/images/slide1.jpg" alt=""></a></li>
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style=""><a href="#"><img src="css/images/slide2.jpg" alt=""></a></li>
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" jcarouselindex="5" style=""><a href="#"><img src="css/images/slide1.jpg" alt=""></a></li>
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal" jcarouselindex="6" style=""><a href="#"><img src="css/images/slide2.jpg" alt=""></a></li>
				</ul></div></div>
			</div>
			<div id="slider-nav">
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>
			</div>
		</div>
		<!-- End Slider -->
		
	</div>
</div>
<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">
		
		<!-- Search, etc -->
		<div class="options">
			<div class="search">
				<form action="" method="post">
					<span class="field"><input type="text" class="blink" value="SEARCH" title="SEARCH"></span>
					<input type="text" class="search-submit" value="GO">
				</form>
			</div>
			<span class="left"><a href="#">Advanced Search</a></span>
			
			<div class="right">
				<span class="cart">
					<a href="#" class="cart-ico">&nbsp;</a>
					<strong>$0.00</strong>
				</span>
				<span class="left more-links">
					<a href="#">Checkout</a>
					<a href="#">Details</a>
				</span>
			</div>
		</div>
		<!-- End Search, etc -->
		
		<!-- Content -->
		<div id="content">
			
			<!-- Tabs -->
			<div class="tabs">
				<ul>
				    <li><a href="#" class="  active"><span>Safety Shoes</span></a></li>
				    <li><a href="#"><span>Sport Shoes</span></a></li>
				    <li><a href="#" class="red"><span>More Shoes</span></a></li>
				</ul>
			</div>
			<!-- Tabs -->
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">
					
					<!-- First Tab Content -->
					<div class="tab-content" style="display: block;">
						
						<div class="items">
							<div class="cl">&nbsp;</div>
							<?php foreach ($products_shoes as $key => $value) {
								# code...
							} ?>
							<ul>
							    <?php foreach ($products_shoes as $key => $value) {
							    	# code...
							     ?>
							    <li>
							    	<div class="image">
							    		<a href="detail.php?action=detail&productID=<?php echo $value['productID']?>"><img src="shop_admin/images/products/<?php echo $value['image'] ?>" alt="" ></a>
							    	</div>
							    	<p>
							    		Item Number: <span>125515</span><br>
							    		Size List : <span>8/8.5/9.5/10/11</span><br>
							    		Brand Name: <a href="#">Adidas Shoes</a>
							    	</p>
							    	<p class="price">Wholesale Price: <strong><?php echo $value['price'] ?></strong></p>
							    </li>
							    <?php
							}
							    ?>	


							</ul>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<!-- End First Tab Content -->
					
					<!-- Second Tab Content -->
					<div class="tab-content" style="display: none;">
						<div class="items">
							<div class="cl">&nbsp;</div>
							<ul>
							   	<?php foreach ($products_shoes as $key => $value) {
							    	# code...
							     ?>
							    <li>
							    	<div class="image">
							    		<a href="#"><img src="shop_admin/images/products/<?php echo $value['image'] ?>" alt="" ></a>
							    	</div>
							    	<p>
							    		Item Number: <span>125515</span><br>
							    		Size List : <span>8/8.5/9.5/10/11</span><br>
							    		Brand Name: <a href="#">Adidas Shoes</a>
							    	</p>
							    	<p class="price">Wholesale Price: <strong><?php echo $value['price'] ?></strong></p>
							    </li>
							    <?php
							}
							    ?>	
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<!-- End Second Tab Content -->
					
					<!-- Third Tab Content -->
					<div class="tab-content" style="display: none;">
						<div class="items">
							<div class="cl">&nbsp;</div>
							<ul>
							    <?php foreach ($products_shoes as $key => $value) {
							    	# code...
							     ?>
							    <li>
							    	<div class="image">
							    		<a href="#"><img src="shop_admin/images/products/<?php echo $value['image'] ?>" alt="" ></a>
							    	</div>
							    	<p>
							    		Item Number: <span>125515</span><br>
							    		Size List : <span>8/8.5/9.5/10/11</span><br>
							    		Brand Name: <a href="#">Adidas Shoes</a>
							    	</p>
							    	<p class="price">Wholesale Price: <strong><?php echo $value['price'] ?></strong></p>
							    </li>
							    <?php
							}
							    ?>	
						    </ul>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<!-- End Third Tab Content -->
					
				</div>
				
				<!-- Brands -->
				<div class="brands">
					<h3>Brands</h3>
					<div class="logos">
						<a href="#"><img src="css/images/logo1.gif" alt=""></a>
						<a href="#"><img src="css/images/logo2.gif" alt=""></a>
						<a href="#"><img src="css/images/logo3.gif" alt=""></a>
						<a href="#"><img src="css/images/logo4.gif" alt=""></a>
						<a href="#"><img src="css/images/logo5.gif" alt=""></a>
					</div>
				</div>
				<!-- End Brands -->
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="#">Home</a>
						<span>|</span>
						<a href="#">Support</a>
						<span>|</span>
						<a href="#">My Account</a>
						<span>|</span>
						<a href="#">The Store</a>
						<span>|</span>
						<a href="#">Contact</a>
					</div>
					<div class="right">
						© Sitename.com. Design by <a href="http://chocotemplates.com" target="_blank" title="CSS Templates">ChocoTemplates.com</a>
					</div>
				</div>
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	

</body>
</html>