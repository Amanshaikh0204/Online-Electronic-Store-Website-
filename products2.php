<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store an Online Shopping</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<!-- header modal -->
	
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			
			<div class="w3l_logo">
				<h1><a href="index.php">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="POST">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.php">Realme 8 Pro</a></li>
											<li><a href="products.php">OnePlus Nord 2 5G<img src="images/newicon.gif" height="20" width="25" alt=" "></a></li>
											<li><a href="products.php">Realme Watch 2 Pro</a></li>
											<li><a href="products.php">Redmi GPS Watch<img src="images/newicon.gif" height="20" width="25" alt=" "></a></li> 
											
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Laptops & Headsets</h6>
											<li><a href="products1.php">Laptops</a></li>
									        <li><a href="products1.php">Wired Earphones <img src="images/newicon.gif" height="20" width="25" alt=" "></a></li>
											<li><a href="products1.php">Wireless Headphones </a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.php">Refrigerator</a></li>
											<li><a href="products2.php">Washing Machine</a></li>
											<li><a href="products2.php">Tv<img src="images/newicon.gif" height="20" width="25" alt=" "></a></li>
											<li><a href="products2.php">Grinder</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li> 
						<li><a href="login-user.php">Account</a></li>  
						<li><a href="mail.php">Mail Us</a></li>
						<?php
						  $count=0;
                          if(isset($_SESSION['cart']))
						  {
							  $count=count($_SESSION['cart']);
						  }
						?>
						<li><a href="mycart.php" >My Cart(<?php echo $count; ?>)</a></li>
						<?php 
						if(isset($_SESSION['def'])){
							echo $_SESSION['def'];
					   
						}
						?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner3">
		<div class="container">
			<h2>Deals on Home <span>Appliances</span> Flat <i>25% Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Home Appliances</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="products2.php">Refrigerator</a></li>
										<li><a href="products2.php">Tv</a></li>
										<li><a href="products2.php">Washing Machine</a></li>
										
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Kitchen 
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="products2.php">Grinder</a></li>
										<li><a href="products2.php">OTG</a></li>
										<li><a href="products2.php">Water Purifier</a></li>
										
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							
						</div>
					</div>
					
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Price</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									
									<li><a href="#">₹ 1999-2999</a></li>
									<li><a href="#">₹ 3499-4999</a></li>
									<li><a href="#">₹ Above 5000</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/50.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Kitchen Appliances<span>Up To</span> 25% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/51.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Home Entertainment<span>Mega</span>Deals</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: </h3>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r1.jpeg" alt=" " class="img-responsive" />
										<img src="images/r2.jpeg" alt=" " class="img-responsive" />
										<img src="images/r3.jpeg" alt=" " class="img-responsive" />
										<img src="images/r1.jpeg" alt=" " class="img-responsive" />
										<img src="images/r2.jpeg" alt=" " class="img-responsive" />
										<img src="images/r3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single9.php">Refrigerator</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹19990</span> <i class="item_price">₹16550</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Samsung Refrigerator">
										<input type="hidden" name="Price" value="16550">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/h1.jpg" alt=" " class="img-responsive" />
										<img src="images/h2.jpeg" alt=" " class="img-responsive" />
										<img src="images/h3.jpeg" alt=" " class="img-responsive" />
										<img src="images/h1.jpg" alt=" " class="img-responsive" />
										<img src="images/h2.jpeg" alt=" " class="img-responsive" />
										<img src="images/h3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal31"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single10.php">Mi 5X LED Tv</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹45999</span> <i class="item_price">₹31999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Mi 5x LED Tv">
										<input type="hidden" name="Price" value="31999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/w1.jpeg" alt=" " class="img-responsive" />
										<img src="images/w2.jpeg" alt=" " class="img-responsive" />
										<img src="images/w3.jpeg" alt=" " class="img-responsive" />
										<img src="images/w1.jpeg" alt=" " class="img-responsive" />
										<img src="images/w2.jpeg" alt=" " class="img-responsive" />
										<img src="images/w3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal32"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single11.php">ONIDA 5 Star Washing Machine</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹21990</span> <i class="item_price">₹12990</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="ONIDA Washing Machine">
										<input type="hidden" name="Price" value="12990">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/m1.jpeg" alt=" " class="img-responsive" />
										<img src="images/m2.jpeg" alt=" " class="img-responsive" />
										<img src="images/m3.jpeg" alt=" " class="img-responsive" />
										<img src="images/m1.jpeg" alt=" " class="img-responsive" />
										<img src="images/m2.jpeg" alt=" " class="img-responsive" />
										<img src="images/m3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single12.php">BAJAJ Rex 750 Mixer Grinder </a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹6300</span> <i class="item_price">₹3800</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Bajaj Rex Mixer">
										<input type="hidden" name="Price" value="3800">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/o1.jpeg" alt=" " class="img-responsive" />
										<img src="images/o2.jpeg" alt=" " class="img-responsive" />
										<img src="images/o3.jpeg" alt=" " class="img-responsive" />
										<img src="images/o1.jpeg" alt=" " class="img-responsive" />
										<img src="images/o2.jpeg" alt=" " class="img-responsive" />
										<img src="images/o3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal46"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single13.php">WONDERCHEF 19-Litre OTG Oven</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹5000</span> <i class="item_price">₹4400</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="WONDERCHEF OTG Oven">
										<input type="hidden" name="Price" value="4400">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/k1.jpeg" alt=" " class="img-responsive" />
										<img src="images/k2.jpeg" alt=" " class="img-responsive" />
										<img src="images/k3.jpeg" alt=" " class="img-responsive" />
										<img src="images/k1.jpeg" alt=" " class="img-responsive" />
										<img src="images/k2.jpeg" alt=" " class="img-responsive" />
										<img src="images/k3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal47"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single14.php">KENT ULTRA STORAGE Water Purifier</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹9500</span> <i class="item_price">₹7200</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="KENT ULTRA Water Purifier">
										<input type="hidden" name="Price" value="7200">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/r1.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>SAMSUNG 198 L Direct Cool Single Door 4 Star Refrigerator with Base Drawer</h4>
							<p>198 L : Good for couples and small families
								Digital Inverter Compressor
								4 Star : For Energy savings up to 45%
								Direct Cool : Economical, consumes less electricity, requires manual defrosting
								Base Stand with Drawer : For storing items that don't need cooling (Onion, Potato etc.)</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹19990</span> <i class="item_price">₹16550</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Samsung Refrigerator">
										<input type="hidden" name="Price" value="16550">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:blue">Camelia Blue</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/h1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Mi 5X 108 cm (43 inch) Ultra HD (4K) LED Smart Android TV with Dolby Atmos and Dolby Vision</h4>
							<p>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube
								Operating System: Android (Google Assistant & Chromecast in-built)
								Resolution: Ultra HD (4K) 3840 x 2160 Pixels
								Sound Output: 30 W
								Refresh Rate: 60 Hz</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹45999</span> <i class="item_price">₹31999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Mi 5x LED Tv">
										<input type="hidden" name="Price" value="31999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:black">Black</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal32" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/w1.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>ONIDA 7 kg 5 star With Crystal Drum Technology Fully Automatic Top Load Grey</h4>
							<p>Fully Automatic Top Load Washing Machines are ergonomically friendly and provide great wash quality
								750 rpm : Higher the spin speed, lower the drying time
								Number of wash programs - 8
								5 Star Rating
								7 kg</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹21990</span> <i class="item_price">₹12990</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="ONIDA Washing Machine">
										<input type="hidden" name="Price" value="12990">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:gray">Load Gray</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/m3.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>BAJAJ Rex 750 Mixer Grinder (4 Jars, White)</h4>
							<p>Bajaj Rex 750W Mixer Grinder comes with 4 jars having a capcity of 1.8L juicer jar, 1.5L liquidising jar, 1L dry jar and 0.4L chutney jar. It comes with Titan Motor and Multi-function blade.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹6300</span> <i class="item_price">₹3800</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Bajaj Rex Mixer">
										<input type="hidden" name="Price" value="3800">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:gray">White</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal46" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/o3.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>WONDERCHEF 19-Litre OTG Oven Toaster Grill (OTG)</h4>
							<p>Whether you want to bake delectable cakes, soft bread, and cheesy pizzas or grill meat, vegetables, or paneer, the Wonderchef OTG can help you do it all. This OTG offers temperature control of up to 250°C to meet a wide range of cooking requirements. And, it has a handy stay-on function that keeps your food warm long after it has been cooked. Moreover, for enhanced durability, the wired racks, handles, and integrated skewer holders are designed using tainless steel, while the heat-resistant window is made from tempered glass.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹5000</span> <i class="item_price">₹4400</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="WONDERCHEF OTG Oven">
										<input type="hidden" name="Price" value="4400">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:black">Black</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal47" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/k1.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>KENT ULTRA STORAGE 8 L UV + UF Water Purifier  (Blue)</h4>
							<p>Protect your family from the dangers of contaminated drinking water by bringing home the Kent Ultra Storage 7 L UV + UF Water Purifier. This essential kitchen appliance features a Double Purification Process, Computer Controlled Operation, and a Wall-mountable Design to offer you safe drinking water.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹9500</span> <i class="item_price">₹7200</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="KENT ULTRA Water Purifier">
										<input type="hidden" name="Price" value="7200">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									
									<li><a href="#" style="color:blue">Blue</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- Related Products -->
	
	<!-- //Related Products -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Customer's Requirement </h3>
				<p>Write Here your requirements</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="manage_cart.php" method="POST">
					<input type="email" name="Email" placeholder="Write Here" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Easy Way To Reach Us</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>107,Kanjurmarg(West) <span>Mumbai-400078</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">abc@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 1234 567 890</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="mail.php">Contact Us</a></li>
					
						
						<li><a href="products.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.php">Mobiles</a></li>
						<li><a href="products1.php">Laptops</a></li>
						<li><a href="products1.php">Headsets</a></li>
						<li><a href="products2.php">Tv</a></li>
						<li><a href="products2.php">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Today's Deals</a></li>
					</ul>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //footer --> 
	 
</body>
</html>