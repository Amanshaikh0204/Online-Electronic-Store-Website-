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
	<div class="banner banner1">
		<div class="container">
			<h2>Great Offers on <span>Mobiles</span> Flat <i>15% Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Mobiles And Watches</li>
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
										<li><a href="products.php">Mobiles</a></li>
										<li><a href="products.php">Watches</a></li>
										
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Watches
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="products.php">Stylish Watches</a></li>
										
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								
								<li><a href="products.php">Featured Brands</a></li>
								
								<li><a href="products.php">Latest Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Price</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="#">Below ₹999</a></li>
									<li><a href="#">₹ 999-1299</a></li>
									<li><a href="#">₹ 1399-1499</a></li>
									<li><a href="#">₹ Above 5000</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/46.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Smart Phones<span>Up To</span> 15% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/47.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Stylish Washes<span>Up To </span>18% Discount</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results:</h3>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.php">Redmi Note 10 Pro Max</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹21999</span> <i class="item_price">₹19999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Redmi Note 10 Pro Max">
										<input type="hidden" name="Price" value="21999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de ; font-weight: 25px;">Add To Cart</button>
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
									<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal40"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single1.php">One Plus Nord 2 5G</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹35999</span> <i class="item_price">₹33999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="One Plus Nord 2 5G">
										<input type="hidden" name="Price" value="35999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
										</form>
									</div> 
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
										<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
										<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal41"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single2.php">Realme 8 Pro</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>₹21999</span> <i class="item_price">₹18999</i></p>
										<form action="manage_cart.php" method="POST">
										<input type="hidden" name="Item_Name" value="Realme 8 Pro">
										<input type="hidden" name="Price" value="18999">   
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
									<img src="images/d1.jpeg" alt=" " class="img-responsive" />
									<img src="images/d2.jpeg" alt=" " class="img-responsive" />
									<img src="images/d3.jpeg" alt=" " class="img-responsive" />
									<img src="images/d1.jpeg" alt=" " class="img-responsive" />
									<img src="images/d2.jpeg" alt=" " class="img-responsive" />
									<img src="images/d3.jpeg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal51"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single16.php">Realme Watch 2 Pro</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>₹5999</span> <i class="item_price">₹4999</i></p>
									<form action="manage_cart.php" method="POST">
									<input type="hidden" name="Item_Name" value="Realme Watch 2 Pro">
										<input type="hidden" name="Price" value="4999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
									</form>
								</div> 
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/d5.jpeg" alt=" " class="img-responsive" />
									<img src="images/d6.jpeg" alt=" " class="img-responsive" />
									<img src="images/d7.jpeg" alt=" " class="img-responsive" />
									<img src="images/d5.jpeg" alt=" " class="img-responsive" />
									<img src="images/d6.jpeg" alt=" " class="img-responsive" />
									<img src="images/d7.jpeg" alt=" " class="img-responsive" />
									
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal52"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single17.php">Redmi GPS Watch</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>₹4999</span> <i class="item_price">₹3999</i></p>
									<form action="manage_cart.php" method="POST">
									<input type="hidden" name="Item_Name" value="Redmi GPS Watch">
										<input type="hidden" name="Price" value="3999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
									</form>
								</div> 
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/d8.jpeg" alt=" " class="img-responsive" />
									<img src="images/d9.jpeg" alt=" " class="img-responsive" />
									<img src="images/d10.jpeg" alt=" " class="img-responsive" />
									<img src="images/d8.jpeg" alt=" " class="img-responsive" />
									<img src="images/d9.jpeg" alt=" " class="img-responsive" />
									<img src="images/d10.jpeg" alt=" " class="img-responsive" />
									 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal53"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single18.php">Realme Watch S Pro  </a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>₹12999</span> <i class="item_price">₹9999</i></p>
									<form action="manage_cart.php" method="POST">
									<input type="hidden" name="Item_Name" value="Realme Watch S Pro">
										<input type="hidden" name="Price" value="9999">   
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
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/5.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best 4G Mobile Phone Under ₹19,999</h4>
							<p> Redmi Note 10 Pro Max Comes With 6.67-inch (1080x2400) Super Amoled Display. It Has Processor Qualcomm Snapdragon 732G. It Comes With Front Camera
								16MP And Rear Quad Camera 108MP + 8MP + 5MP + 2MP. It Has Ram 6GB/8GB and Storage With 64GB/128GB. It's Battery Capacity is 5020mAh And it Comes With OS Android 11.</p>
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
								<p><span>₹21999</span> <i class="item_price">₹19999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Redmi Note 10 Pro Max">
										<input type="hidden" name="Price" value="21999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de ; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: purple;">Dark Nebula</a></li>
							<li><a href="#" style="color: black;">Dark Night</a></li>
							<li><a href="#" style="color: blue;">Glacial Blue</a></li>
							<li><a href="#" style="color: orange;">Vintage Bronze</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<div class="modal video-modal fade" id="myModal40" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/6.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best 5G Mobile Phone Under ₹33,999</h4>
							<p> One Plus Nord 2 5G Comes With 6.43-inch (1080x2400) Fulid Amoled Display With 90 Hz Refresh Rate. It Has Processor MediaTek Dimensity 1200. It Comes With Front Camera
								32MP And Rear Tri Camera 50MP + 8MP + 2MP. It Has Ram 8GB/12GB and Storage With 128GB/256GB. It's Battery Capacity is 4500mAh And it Comes With OS Android 11.</p>
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
								<p><span>₹35999</span> <i class="item_price">₹33999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="One Plus Nord 2 5G">
										<input type="hidden" name="Price" value="35999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: gray;">Gray Sierra</a></li>
							<li><a href="#" style="color: lightblue;">Blue Haze</a></li>
							<li><a href="#" style="color: lightgreen;">Green wood</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal51" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/d4.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Realme Watch 2 Pro  (Grey Strap, Free Size)</h4>
							<p>1.75" HD Super Bright Touchscreen Display for fine picture quality and vivid colors
								Heart Rate & Blood Oxygen Saturation (SpO2) Monitors
								Dual Satellite Low Power GPS supporting GLONASS and GPS provides accurate & independent path tracking for running, jogging, cycling, walking.
								Up to 14 Days Battery Life</p>
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
								<p><span>₹5999</span> <i class="item_price">₹4999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Realme Watch 2 Pro">
										<input type="hidden" name="Price" value="4999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: gray;">Gray </a></li>
							<li><a href="#" style="color: black;">Black</a></li>
							
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal52" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/d5.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Redmi GPS Watch</h4>
							<p>In-built GPS: Dual satellite positioning system with GPS + GLONASS.
								Display: 3.56 cm (1.4) high resolution, full touch, color display
								Design: 200+ watch faces, available in 3 different color variants - Black, Blue, Ivory
								Health features: 24/7 Heart Rate Monitoring, Sleep monitoring, Breathing exercises</p>
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
								<p><span>₹4999</span> <i class="item_price">₹3999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Redmi GPS Watch">
										<input type="hidden" name="Price" value="3999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: gray;">Gray </a></li>
							<li><a href="#" style="color: black;">Black</a></li>
							
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal53" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/d9.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Realme Watch S Pro</h4>
							<p>3.5cm (1.39 inch) Large AMOLED Touchscreen | 14 Days Battery Life
								Blood Oxygen & Heart Rate Monitor for Accurate Health Tracking | 15 Sports Modes | 5ATM Water Resistance (Upto 50m)
								Stainless Steel Case for a Premium Look and Durability 100+ Stylish Watch Faces | High Precision Dual Satellite GPS</p>
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
								<p><span>₹12999</span> <i class="item_price">₹9999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Realme Watch S Pro">
										<input type="hidden" name="Price" value="9999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: gray;">Gray </a></li>
							<li><a href="#" style="color: black;">Black</a></li>
							
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<div class="modal video-modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/a2.jpeg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Gaming Mobile </h4>
							<p> Realme 8 Pro Comes With 6.40-inch (1080x2400) Super Amoled Display With 120 Hz Refresh Rate. It Has Processor Qualcomm Snapdragon 720G. It Comes With Front Camera
								16MP And Rear Quad Camera 108MP + 8MP + 2MP + 2MP. It Has Ram 6GB/8GB and Storage With 64GB/128GB. It's Battery Capacity is 4500mAh And it Comes With OS Android 11.</p>
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
								<p><span>₹21999</span> <i class="item_price">₹18999</i></p>
								<form action="manage_cart.php" method="POST">
								<input type="hidden" name="Item_Name" value="Realme 8 Pro">
										<input type="hidden" name="Price" value="18999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
								</form>
							</div>
							<h5>Colors :</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#" style="color: lightskyblue;">Infinity Blue</a></li>
							<li><a href="#" style="color: black;">Infinity Black</a></li>
							<li><a href="#" style="color: yellow;">Illuminatig Yellow</a></li>
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