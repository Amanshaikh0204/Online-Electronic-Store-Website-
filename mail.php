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
					<form action="#" method="post">
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
	<div class="banner banner10">
		<div class="container">
			<h2>Mail Us</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Mail Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Mail Us</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					<p>107, Kanjurmarg (West), Mumbai-40078.
						</p>
					<ul>
						<li>Phone :+91 1234 567 890</li>
						
						
						<li><a href="mailto:info@example.com">abc@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="contact.php" method="post">
						<input type="text" name="name" placeholder="Your Name" required="">
						<input type="email" name="email" placeholder="Your Email" required="">
						<input type="text" name="phone" placeholder="Phone Number" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" name="submit" value="Submit" >
					</form>
				</div>
				<?php
              if(isset($_SESSION['kbc']))
            {
               echo $_SESSION['kbc'];
               unset($_SESSION['kbc']);
            } ?>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15077.551883970003!2d72.91770132908925!3d19.134487342868628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c78a8b80a069%3A0x6d337c0bbcab3cfc!2sKanjurmarg%20West%2C%20Bhandup%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1644033503160!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				
			</div>
		</div>
	</div>
	<!-- //mail -->
<!-- newsletter -->
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
<!-- cart-js -->
 
</body>
</html>