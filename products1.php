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
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all"/>  <!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //Custom Theme files --> 
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
	<div class="banner banner2">
		<div class="container">
			<h2>Top Selling <span>Laptops</span> Flat <i>25% Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Laptops and Audio</li>
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
										<li><a href="products1.php">Laptops</a></li>
										<li><a href="products1.php">Headphone</a></li>
										
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Headset
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										
										<li><a href="products2.php">Wired Earphones</a></li>
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
									<li><a href="#">Below ₹2499</a></li>
									<li><a href="#">₹ 29999-48000</a></li>
									<li><a href="#">Above ₹48999</a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/48.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Best<span> New</span> Headsets</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/49.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos"> 
								<h3>Best Prices On<span> Laptop</span>Upto 35% Off</h3>
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
									<img src="images/l3.jpeg" alt=" " class="img-responsive" />
										<img src="images/l1.jpg" alt=" " class="img-responsive" />
										<img src="images/l2.jpg" alt=" " class="img-responsive" />
										<img src="images/l3.jpeg" alt=" " class="img-responsive" />
										<img src="images/l1.jpg" alt=" " class="img-responsive" />
										<img src="images/l2.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single6.php">RedmiBook 15 Pro</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹53999</span> <i class="item_price">₹48999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="RedmiBook 15 Pro">
										<input type="hidden" name="Price" value="48999">   
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
									<img src="images/l5.jpg" alt=" " class="img-responsive" />
										<img src="images/l8.jpeg" alt=" " class="img-responsive" />
										<img src="images/l7.jpeg" alt=" " class="img-responsive" />
										<img src="images/l5.jpg" alt=" " class="img-responsive" />
										<img src="images/l8.jpeg" alt=" " class="img-responsive" />
										<img src="images/l7.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal44"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single7.php">Acer Nitro 5</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹65999</span> <i class="item_price">₹55999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Acer Nitro 5">
										<input type="hidden" name="Price" value="55999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/l9.jpeg" alt=" " class="img-responsive" />
										<img src="images/l10.jpeg" alt=" " class="img-responsive" />
										<img src="images/l11.jpeg" alt=" " class="img-responsive" />
										<img src="images/l9.jpeg" alt=" " class="img-responsive" />
										<img src="images/l10.jpeg" alt=" " class="img-responsive" />
										<img src="images/l11.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal45"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single8.php">Asus Vivobook F571GT-HN1062T</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹59999</span> <i class="item_price">₹57999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Asus Vivobook F571GT">
										<input type="hidden" name="Price" value="57999">   
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
									<img src="images/e1.jpg" alt=" " class="img-responsive" />
										<img src="images/e2.jpg" alt=" " class="img-responsive" />
										<img src="images/e3.jpg" alt=" " class="img-responsive" />
										<img src="images/e1.jpg" alt=" " class="img-responsive" />
										<img src="images/e2.jpg" alt=" " class="img-responsive" />
										<img src="images/e3.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single3.php">JBL C100SI In Ear Wired Earphones with Mic</a></h5>
										<p> <i class="item_price">₹599</i></p>
									<div class="simpleCart_shelfItem">
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="JBL C100SI In Ear Wired">
										<input type="hidden" name="Price" value="599">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/e5.jpg" alt=" " class="img-responsive" />
										<img src="images/e6.jpg" alt=" " class="img-responsive" />
										<img src="images/e7.jpg" alt=" " class="img-responsive" />
										<img src="images/e5.jpg" alt=" " class="img-responsive" />
										<img src="images/e6.jpg" alt=" " class="img-responsive" />
										<img src="images/e7.jpg" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal42"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single4.php">boAt Rockerz 185 Bluetooth Headset</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹1299</span> <i class="item_price">₹999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="boAt Rockerz 185 Bluetooth">
										<input type="hidden" name="Price" value="999">   
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
									<img src="images/e8.jpg" alt=" " class="img-responsive" />
										<img src="images/e9.jpg" alt=" " class="img-responsive" />
										<img src="images/e10.jpg" alt=" " class="img-responsive" />
										<img src="images/e8.jpg" alt=" " class="img-responsive" />
										<img src="images/e9.jpg" alt=" " class="img-responsive" />
										<img src="images/e10.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal43"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single5.php">boAt Rockerz 370 Bluetooth Wireless On Ear Headphone with Mic</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹1099</span> <i class="item_price">₹899</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="boAt Rockerz 370 Bluetooth">
										<input type="hidden" name="Price" value="899">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
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
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/e4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>JBL C100SI In Ear Wired Earphones with Mic</h4>
							<p>JBL Signature Sound
								Extra Deep Bass. Troubleshooting steps : Kindly ensure 3.5mm port on Host device is clean and dust free and 3.5mm jack of the earphone is adequately inserted inside the input device port
								Noise Cancelling Microphone, Frequency range : 20-20kHz
								One-Button Universal Remote with Mic
								Quick Launch Access to Google Assistant / Siri
								</p>
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
								<p><span>₹799</span> <i class="item_price">₹599</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="JBL C100SI In Ear Wired">
										<input type="hidden" name="Price" value="599">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: black;">Black</a></li>
							<li><a href="#" style="color: red;">Red</a></li>
							<li><a href="#" style="color: whitesmoke;">White</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal42" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/e5.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>boAt Rockerz 185 Bluetooth Headset</h4>
							<p>Connect to your media devices instantly, take the advantage of dual pairing and enjoy real-time audio with Bluetooth v5.0
								The ergonomically designed neckband dons magnetic earbuds for a hassle-free usage experience
								The wireless neckband is lightweight in build and IPX4 rated for protection against sweat & water so that you can hit the gym or treadmill being carefree</p>
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
								<p><span>₹1299</span> <i class="item_price">₹999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="boAt Rockerz 185 Bluetooth">
										<input type="hidden" name="Price" value="999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: green;">Green Bliss</a></li>
							<li><a href="#" style="color: black;">Fiery Black</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal43" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/e10.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>boAt Rockerz 370 Bluetooth wireless on ear headphone with mic</h4>
							<p>Bluetooth: It has Bluetooth v5.0 with a range of 10m and is compatible with Android & iOS
								Battery: Rockerz 370 offers a playback time of up to 12 hours.. Frequency Response 20Hz-20KHz,Sensitivity (dB) 79dB±3DB,Impedance 32Ω. Driver Type:Moving Coil Driver
								Lightweight Ergonomic Design with Easy Controls

							</p>
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
								<p><span>₹1099</span> <i class="item_price">₹899</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="boAt Rockerz 370 Bluetooth">
										<input type="hidden" name="Price" value="899">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: black;">Buoyant Black</a></li>
							<li><a href="#" style="color: lightgreen;">Gregarious Green</a></li>
							<li><a href="#" style="color: red;">Fiery Red</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	 
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/l3.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>RedmiBook 15 Pro</h4>
							<p>The RedmiBook 15 Pro is primarily designed for office work. It features a 15-inch 1080p display, an 11th gen Intel Core i5 processor, 8GB RAM, and 512GB NVMe SSD storage.
								The RedmiBook 15 Pro comes with basic packaging that includes the notebook, a 65W power brick with a standard barrel plug, power cord, and user manual.
								The RedmiBook 15 Pro has a 15-inch, 1920x1080 resolution, 60Hz TN LCD panel.
							</p>
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
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹53999</span> <i class="item_price">₹48999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="RedmiBook 15 Pro">
										<input type="hidden" name="Price" value="48999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: black;">Black</a></li>
							<li><a href="#" style="color: gray;">Charcoal Gray</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>  
	<div class="modal video-modal fade" id="myModal44" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/l8.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Acer Nitro Core i5 11th Gen - (8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce RTX 3050) AN515-57 Gaming Laptop</h4>
							<p>
								Dominate the Game: Great performance meets long battery life with the Intel Core i5-11400H Processor - up to 4.5GHz, 6 cores, 12 threads, 12MB Intel Smart Cache. Avail Xbox Game Pass for PC
RTX, It's On: The latest NVIDIA GeForce RTX 3050 (4GB dedicated GDDR6 VRAM) is powered by award-winning architecture with new Ray Tracing Cores, Tensor Cores, and streaming multiprocessors support DirectX 12 Ultimate for the ultimate gaming performance
							</p>
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
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹65999</span> <i class="item_price">₹55999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Acer Nitro 5">
										<input type="hidden" name="Price" value="55999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: black;">Shale Black</a></li>
							
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal45" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/l9.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>ASUS Vivobook Gaming Core i5 9th Gen - (8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) F571GT-HN1062T Gaming Laptop  (15.6 inch, Star Black, 2.14 kg)</h4>
							<p>
								NVIDIA GeForce GTX 1650
15.6 inch Full HD LED Backlit Anti-glare Display (16:9, 250nits Brightness, NTSC: 45% Color Gamut, 80% Screen-to-body Ratio, IPS Level Panel)
Light Laptop without Optical Disk Drive
Pre-installed Genuine Windows 10 OS
							</p>
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
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>₹59999</span> <i class="item_price">₹57999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Asus Vivobook F571GT">
										<input type="hidden" name="Price" value="57999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: black;">Star Black</a></li>
							
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