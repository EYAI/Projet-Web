<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the price table -->
	<meta name="Petshop" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the price table style -->
	<meta name="Petshop" content="black">
	<!-- set the description -->
	<meta name="description" content="Petshop HTML5 Template">
	<title>Melodyo</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'ela' && 
                  $_POST['password'] == '123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  header("Location:C:\wamp64\www\Melodyo\views\Backend\afficherLivreur.php");
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
	<div id="wrapper">
		<header id="header">
			<div class="header-area container">
				<div class="row">
					<div class="col-xs-12 hidden visible-xs">
						<ul class="list-unstyled social-network text-center">
							<li><a href="mailto:Melodyo@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
							<li><a href="tell:000000000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<ul class="list-unstyled contact-info">
							<li>
								<a href="mailto:Melodyo@support.com" class="icon pull-left"><i class="icon-message"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Mail us:</strong>
									<a href="mailto:Melodyo@support.com">Melodyo@support.com</a>
								</div>
							</li>
							<li>
								<a href="tell:000000000" class="icon pull-left"><i class="icon-phone-call"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Call us:</strong>
									<a href="tell:000000000">(+1) 00000000</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<div class="social-list">
							<ul class="list-unstyled social-network">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<ul class="list-unstyled account-cart">
								<li><a href="#"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo pull-left hidden visible-xs">
							<a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a>
						</div>
						<a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
						<nav id="nav">
							<ul class="list-unstyled text-uppercase menu-left">
								<li><a href="index-2.html">home</a></li>
								<li>
									<a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="services.html">services</a></li>
										<li><a href="aboutus.html">about us</a></li>
										<li><a href="404page.html">404 page</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.html">Shop</a></li>
										
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a></li>
								<li class="mar-zero">
									<a href="javascript:void(0);">blog</a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="blog-standard.html">Blog Standard</a></li>
									
									</ul>
								</li>
								<li><a href="contact-us.html">LOGIN</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main id="main">
			<section class="hero-sec bg-full" style="background-image:url(images/imgg01.jpg);">
				<div class="caption">
					
					<h1 class="heading text-center">LOGIN</h1>
					
				</div>
			</section>
			
			<section class="contact-sec container">
					
					<div class="col-xs-12 col-sm-8">
						<h2 class="heading heading-dark">Enter username and password</h2>
						<form class = "contact-form" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
			?>" method = "post">
			            <h4><?php echo $msg; ?></h4>

							<fieldset>
								<div class="form-group">
									<div class="col">
										<input class="form-control lg-round" placeholder="Username = ela" type="text" name="username" required autofocus>
							
										<input class="form-control lg-round" placeholder="Password = 123" type="password" name="password" required>
									</div>
								</div>
								<button class="btn-primary text-center text-uppercase lg-round" type = "submit" 
               name = "login">Login</button>
								
							</fieldset>
						</form>
					</div>
					
			</section>
			<section class="callout" style="background-image:url(images/img26.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h2>Get 50% offer for all Musicsheets</h2>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a class="btn-primary text-uppercase text-center lg-round" href="#">coupon code : Melodyo1234</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
						<div class="footer-logo">
							<a href="#"><img src="images/logoo.png" alt="Pet Shop" class="img-responsive"></a>
						</div>
					
						<ul class="contact-list list-unstyled">
							<li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801,  Melodyo shop, Australia.</li>
							<li><a href="mailto:Melodyoshop@mail.com"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>Melodyoshop@mail.com</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (+23) 0000000 000 </a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h3>Information</h3>
						<ul class="info-list list-unstyled">
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Buy MusicSheets</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Book MusicSHeets</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Free Shipping</a></li>
						
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Instagram</h3>
						<ul class="insta-list list-unstyled">
							<li><a href="#"><img src="images/imgg07.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/imgg05.png" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/imgg09.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/imgg10.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/imgg03.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/imgg04.jpg" alt="footer-img" class="img-responsive"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Newsletter</h3>
						<div class="newsletter">
							<form class="newsletter-form" action="#">
								<fieldset>
									<input class="form-control" placeholder="Email" type="email">
									<button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
</html>







