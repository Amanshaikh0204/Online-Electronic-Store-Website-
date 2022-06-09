<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store an Online Shopping </title>
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
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />


<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
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
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	
	<script>
		$('#myModal88').modal('show');
	</script>  
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
		
			<div class="w3l_logo">
				<h1><a href="index.php" style="text-align: center">Electronic Store<span>Your stores. Your place.</span></a></h1>
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
						<li><a href="index.php" class="act">Home</a></li>	
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
						
						<?php
						  $count=0;
                          if(isset($_SESSION['cart']))
						  {
							  $count=count($_SESSION['cart']);
						  }
						?>
						<li><a href="mycart.php" >My Cart(<?php echo $count; ?>)</a></li>
						<li><a href="myorder.php" >My Order</a></li>&nbsp;
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
	<div class="banner">
		<div class="container">
			<h3>Electronic Store, <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<!-- pop-up-box -->     
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Mobiles</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Audio</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Laptops</a></li>
						<li role="presentation"><a href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">Household</a></li>
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Kitchen</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
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
										<input type="hidden" name="Price" value="19999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de ; font-weight: 25px;">Add To Cart</button>
										</form>  
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
										<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
										<img src="images/a3.jpg" alt=" " class="img-responsive" />
										<img src="images/a2.jpeg" alt=" " class="img-responsive" />
										
										
										<div class="w3_hs_bottom">
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
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/e1.jpg" alt=" " class="img-responsive" />
										<img src="images/e2.jpg" alt=" " class="img-responsive" />
										<img src="images/e3.jpg" alt=" " class="img-responsive" />
										<img src="images/e1.jpg" alt=" " class="img-responsive" />
										<img src="images/e2.jpg" alt=" " class="img-responsive" />
										<img src="images/e3.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/e5.jpg" alt=" " class="img-responsive" />
										<img src="images/e6.jpg" alt=" " class="img-responsive" />
										<img src="images/e7.jpg" alt=" " class="img-responsive" />
										<img src="images/e5.jpg" alt=" " class="img-responsive" />
										<img src="images/e6.jpg" alt=" " class="img-responsive" />
										<img src="images/e7.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										
										<img src="images/e8.jpg" alt=" " class="img-responsive" />
										<img src="images/e9.jpg" alt=" " class="img-responsive" />
										<img src="images/e10.jpg" alt=" " class="img-responsive" />
										<img src="images/e8.jpg" alt=" " class="img-responsive" />
										<img src="images/e9.jpg" alt=" " class="img-responsive" />
										<img src="images/e10.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/l3.jpeg" alt=" " class="img-responsive" />
										<img src="images/l1.jpg" alt=" " class="img-responsive" />
										<img src="images/l2.jpg" alt=" " class="img-responsive" />
										<img src="images/l3.jpeg" alt=" " class="img-responsive" />
										<img src="images/l1.jpg" alt=" " class="img-responsive" />
										<img src="images/l2.jpg" alt=" " class="img-responsive" />
										
										
										<div class="w3_hs_bottom">
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
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/l5.jpg" alt=" " class="img-responsive" />
										<img src="images/l8.jpeg" alt=" " class="img-responsive" />
										<img src="images/l7.jpeg" alt=" " class="img-responsive" />
										<img src="images/l5.jpg" alt=" " class="img-responsive" />
										<img src="images/l8.jpeg" alt=" " class="img-responsive" />
										<img src="images/l7.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/l9.jpeg" alt=" " class="img-responsive" />
										<img src="images/l10.jpeg" alt=" " class="img-responsive" />
										<img src="images/l11.jpeg" alt=" " class="img-responsive" />
										<img src="images/l9.jpeg" alt=" " class="img-responsive" />
										<img src="images/l10.jpeg" alt=" " class="img-responsive" />
										<img src="images/l11.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/r1.jpeg" alt=" " class="img-responsive" />
										<img src="images/r2.jpeg" alt=" " class="img-responsive" />
										<img src="images/r3.jpeg" alt=" " class="img-responsive" />
										<img src="images/r1.jpeg" alt=" " class="img-responsive" />
										<img src="images/r2.jpeg" alt=" " class="img-responsive" />
										<img src="images/r3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/h1.jpg" alt=" " class="img-responsive" />
										<img src="images/h2.jpeg" alt=" " class="img-responsive" />
										<img src="images/h3.jpeg" alt=" " class="img-responsive" />
										<img src="images/h1.jpg" alt=" " class="img-responsive" />
										<img src="images/h2.jpeg" alt=" " class="img-responsive" />
										<img src="images/h3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/w1.jpeg" alt=" " class="img-responsive" />
										<img src="images/w2.jpeg" alt=" " class="img-responsive" />
										<img src="images/w3.jpeg" alt=" " class="img-responsive" />
										<img src="images/w1.jpeg" alt=" " class="img-responsive" />
										<img src="images/w2.jpeg" alt=" " class="img-responsive" />
										<img src="images/w3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/m1.jpeg" alt=" " class="img-responsive" />
										<img src="images/m2.jpeg" alt=" " class="img-responsive" />
										<img src="images/m3.jpeg" alt=" " class="img-responsive" />
										<img src="images/m1.jpeg" alt=" " class="img-responsive" />
										<img src="images/m2.jpeg" alt=" " class="img-responsive" />
										<img src="images/m3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/o1.jpeg" alt=" " class="img-responsive" />
										<img src="images/o2.jpeg" alt=" " class="img-responsive" />
										<img src="images/o3.jpeg" alt=" " class="img-responsive" />
										<img src="images/o1.jpeg" alt=" " class="img-responsive" />
										<img src="images/o2.jpeg" alt=" " class="img-responsive" />
										<img src="images/o3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/k1.jpeg" alt=" " class="img-responsive" />
										<img src="images/k2.jpeg" alt=" " class="img-responsive" />
										<img src="images/k3.jpeg" alt=" " class="img-responsive" />
										<img src="images/k1.jpeg" alt=" " class="img-responsive" />
										<img src="images/k2.jpeg" alt=" " class="img-responsive" />
										<img src="images/k3.jpeg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
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
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom --> 
	<!-- modal-video -->
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
								<input type="hidden" name="Item_Name" value="ONE Plus Nord 2 5G">
										<input type="hidden" name="Price" value="33999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de ; font-weight: 25px;">Add To Cart</button>
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
	
	
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.php">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<h3>Reviews</h3>
										<p>Very Best Website For All Electronic Products.</p>
										<h4>Rahul Yadav</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<h3>Reviews</h3>
										<p>Such a Nice website to buy Electronic Products and Offers with the products is very best.</p>
										<h4>vikas Singh</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<h3>Reviews</h3>
										<p>Very Very Perfect And suitable website to buy mobile and all other electronic products.</p>
										<h4>Rahul Singh</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Digital <span>Watches</span></h4>
						<h5>Save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/l3.jpeg" alt=" " class="img-responsive" />
							<img src="images/l1.jpg" alt=" " class="img-responsive" />
							<img src="images/l2.jpg" alt=" " class="img-responsive" />
							<img src="images/l3.jpeg" alt=" " class="img-responsive" />
							<img src="images/l1.jpg" alt=" " class="img-responsive" />
							<img src="images/l2.jpg" alt=" " class="img-responsive" />
							
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
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
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<img src="images/5.jpg" alt=" " class="img-responsive" />
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<img src="images/5.jpg" alt=" " class="img-responsive" />
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
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
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/e5.jpg" alt=" " class="img-responsive" />
							<img src="images/e6.jpg" alt=" " class="img-responsive" />
							<img src="images/e7.jpg" alt=" " class="img-responsive" />
							<img src="images/e5.jpg" alt=" " class="img-responsive" />
							<img src="images/e6.jpg" alt=" " class="img-responsive" />
							<img src="images/e7.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
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
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/h1.jpg" alt=" " class="img-responsive" />
							<img src="images/h2.jpeg" alt=" " class="img-responsive" />
							<img src="images/h3.jpeg" alt=" " class="img-responsive" />
							<img src="images/h1.jpg" alt=" " class="img-responsive" />
							<img src="images/h2.jpeg" alt=" " class="img-responsive" />
							<img src="images/h3.jpeg" alt=" " class="img-responsive" />
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal31"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.php">Mi 5X LED Tv</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>₹45999</span> <i class="item_price">₹31999</i></p>
							<form action="manage_cart.php" method="POST">
							<input type="hidden" name="Item_Name" value="Mi 5x LED Tv">
										<input type="hidden" name="Price" value="31999">   
										<button type="submit" name="Add_To_Cart"  class="btn btn-outline-success" style="color:black; background-color: #5bc0de; font-weight: 25px;">Add To Cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 
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