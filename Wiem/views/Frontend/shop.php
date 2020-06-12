<?php


session_start();  
if(!$_SESSION['Email']&& !$_SESSION['Nom'])
	{
		header("location: connexion.php");
	}
	else
	{	

include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\categorieC.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\components\components.php'
;


 $categorie=new categorieC();
        $listeCategorie=$categorie->affichercategories();


?> 
<!DOCTYPE html>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
	

	
    <link href="css1/main.css" rel="stylesheet" type="text/css">
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link href="css1/responsive.css" rel="stylesheet" type="text/css">
    <link href="css1/animate.css" rel="stylesheet" type="text/css">
    <link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
     <script src="js1/modernizr.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
<script >
	var details=
       {
              "Chopin Concerto 1":134,
              "Bash Partitas":28,
              "Chopin Ballades":28,
              "Mozart Symphonie":58,
              "Beethoven Symphonie":25,
              "Adele":25,
              "Alan walker":25,


       };
     $(document).ready(function() {

       
      $("#slider").slider({max;50,range:true,values:[10,100],
      change:function(event,ui){
      	getDetails(ui.values[0],ui.values[1]);
      }
      });  
      var current=$("#slider").slider("#option", "values");
      getDetails(current[0],current[1])
          
    });
function getDetails(minimum,maximum)
{
 $("#price-range").text("$"+minimum+"- $"+maximum);
 var result= "<table><tr><th>Product Name"<th><th>Price (in $)</th></tr>
 for(var item in details)
 {
 	if( details[item]>=minimum && details[item]<=maximum){
 		result+="<tr><td>"+ item +"</td><td>"+details[item]+"</td></tr>"
 	}
 }
 result+="</table>"
 $("output")
}
</script>
</head>
<body>
<div id="loader">
    <div class="loader">
        <div class="position-center-center"> <img src="images/bg.png" alt="">

            <p class="font-playfair text-center">Please Wait...</p>
            <div class="loading">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
</div>


	<div id="wrapper">
		<header id="header">
			<div class="header-area container">
				<div id="progressBar"></div>
<div id="scrollPath"></div>
				<div class="row">
					<div class="col-xs-12 hidden visible-xs">
						<ul class="list-unstyled social-network text-center">
							<li><a href="mailto:Melodyo@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
							<li><a href="tell:000000000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="calculatrice.php"><i class="fa fa-calculator" aria-hidden="true"></i></a></li>

							<li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>

							<li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<ul class="list-unstyled contact-info">
							<li>
								<a href="mailto:Melodyo@esprit.tn" class="icon pull-left"><i class="icon-message"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Mail us:</strong>
									<a href="mailto:Melodyo@esprit.tn">Melodyo@support.com</a>
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
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								
								<li><a href="calculatrice.php"><i class="fa fa-calculator" aria-hidden="true"></i></a></li>
							</ul>
                          
    
							<ul class="list-unstyled account-cart">
								<li><a href="profil.php?ID=<?php echo $_SESSION['ID'];?>"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="deconnexion.php"><i class="icon-user"></i><span class="hidden-xs">Déconnexion</span></a></li>
								<li><a href="cart.<?php  ?>"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a>
									
								</li>

								
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
										<li><a href="services.php">services</a></li>
										<li><a href="aboutus.php">about us</a></li>
										<li><a href="AjouterReclamation1.php">Passer une reclamation</a></li>
										
										

										<li><a href="404page.html">404 page</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.php">Shop</a></li>
										
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logoo.png" alt="PetShop"></a></li>
								<li class="mar-zero">
									<a href="javascript:void(0);">blog</a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="blog-standard.html">Blog Standard</a></li>
									
									</ul>
								</li>
								<li><a href="contactus.php">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
        </header>
        
		<main id="main">
			<section class="hero-sec bg-full" style="background-image:url(images/imgg01.jpg);">

				<div class="caption">
					<h1 class="heading text-center">Shop</h1>
				</div>

			</section>
			<section class="shop-sec style1 container">
				<div class="row" >
					<div class="col-xs-12">
						<article id="content">
		<div>
			<div class="card shadow-lg h-75 m-4 mt-8">
            <div class="card-header py-3">
            	
    <h4><i style="font-size:20px" class="fa">&#xf004;</i></br><i class="icon icon-top-note"></i>Coups de <i>cœur</i></h4>

							<div class="product-block">
								<div class="product-col">
									<div class="img-holder">
										<img src="images/1.png" alt="food-img" class="img-responsive">
										<span class="sale-item">Sale!</span>
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

											</ul>
											<audio controls="controls" style=" width:250px" >
												<source src="audio/chopin.mp3">
													<source src="audio/chopin.ogg" >
											</audio>
										</div>
									</div>

									<div class="descrip">
										<h3 class="heading2">Chopin Concerto n°1</h3> 
										<span class="price">$134.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								<div class="product-col">
									<div class="img-holder">
										<img src="images/1.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											<audio controls="controls" style=" width:250px" >
												<source src="audio/bach.mp3">
													<source src="audio/bach.ogg" >
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">Bach Partitas</h3> 
										<span class="price">$28.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								<div class="product-col">
									<div class="img-holder">
										<img src="images/2.jpg" alt="food-img" class="img-responsive">
										<span class="sale-item">Sale!</span>
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
                                            <audio controls="controls" style=" width:250px" >
												<source src="audio/chopinB.mp3">
													<source src="audio/chopinB.ogg" >
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">Chopin Ballades</h3> 
										<span class="price">$28.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
                               
                               <h4><i class="fa fa-star-o" style="font-size:24px"></i><i class="icon icon-top-note"></i>Top <i>partitions</i></h4>
								<div class="product-col sold-item">
									<div class="img-holder">
										<img src="images/4.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								
									<strong class="text-uppercase">sold out!</strong>
									<div class="descrip">
										<h3 class="heading2">Rachmaninov Second Concerto</h3>
										<span class="price">$42.00</span>
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								<div class="product-col">
									<div class="img-holder">
										<img src="images/9.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											 <audio controls="controls" style=" width:250px" >
												<source src="audio/mozart.mp3">
													
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">Mozart: Symphonie nº 40</h3> 
										<span class="price">$58.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								<div class="product-col">
									<div class="img-holder">
										<img src="images/5.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											<audio controls="controls" style=" width:250px" >
												<source src="audio/231.mp3">
													
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">Beethoven:Symphonie nº 5</h3> 
										<span class="price">$25.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								  <h4><i class="fa fa-star-o" style="font-size:24px"></i><i class="icon icon-top-note"></i> <i>Nouveautés</i></h4>
								
								<div class="product-col">
									<div class="img-holder">
										<img src="images/adele.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											<audio controls="controls" style=" width:250px" >
												<source src="audio/adele.mp3">
													
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">adele someone like you</h3> 
										<span class="price">$25.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
								
								<div class="product-col">
									<div class="img-holder">
										<img src="images/alan.jpg" alt="food-img" class="img-responsive">
										<div class="over-holder">
											<ul class="list-unstyled text-center share-list">
												<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="icon-refresh"></i></a></li>
												<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											<audio controls="controls" style=" width:250px" >
												<source src="audio/alan.mp3">
													
											</audio>
										</div>
									</div>
									<div class="descrip">
										<h3 class="heading2">Alan Walker Faded</h3> 
										<span class="price">$25.00</span>		
									</div>
									<div class="text-center">
										<a href="shop-detail.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
									</div>
								</div>
							</div>
							<ul class="pagination list-unstyled text-center">
								<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a class="active" href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</article>
						 <div class="col-sm-3 animate fadeInLeft" data-wow-delay="0.2s">
                        <div class="side-bar">

                            <h4>Filtrer</h4>
                           
                            <!-- HEADING -->
                            <div class="heading">
                                <h6>PRIX</h6>
                            </div>
                            <!-- PRICE -->
                            <div class="cost-price-content">
                                <div id="price-range" class="price-range"></div>
                                <span id="price-min" class="price-min">20</span> <span id="price-max" class="price-max">80</span>
                                <div id="slider"></div>
                        	<div id="output"></div> </div>
                            <a href="#." class="btn btn-small btn-dark">FILTRER</a>


                            <!-- COMPAIR BOX -->
                            <h4 class="margin-t-40">Comparer</h4>
                            <div class="compair-box">
                                <div class="position-center-center full-width text-center"> ID de produit a comparer </div>
                            </div>
                            <a href="#." class="btn btn-small btn-dark">Comparer</a>

                            <!-- ADS-->
                            <div class="sider-bar-ads"> <img src="images/side-bar-ad.jpg" alt="">
                                <div class="position-center-center full-width text-center"> 1805 <a href="#." class="btn btn-small btn-dark">SHOP NOW</a> </div>
                            </div>
                       
                    <!--======= ITEMS =========-->
                    
						
							
							<section class="widget">
								<ul class="list-unstyled category-list">
								<h3>Categories</h3>
								 <ul>
								 	<?php  foreach ($listeCategorie as $row):?>
								 	<li>
								 		<a href="Partitions.html"><?=$row['nom_cat']?></a></li>
								 	</li>
								 <?php endforeach;?>
								 </ul>
								
							       
									
							</section>

							<section class="widget">
								<h3>Search Products</h3>
								<form class="search-form" action="#">
									<fieldset>
										<input class="form-control" placeholder="Search...." type="search">
										<button class="submit-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									</fieldset>
								</form>
							</section>
						</aside>
					</div>
				</div>
				<div class="col-sm-9 animate fadeInUp" data-wow-delay="0.2s">
                        <div class="items-short-type animate fadeInUp" data-wow-delay="0.4s">

			</section>
			<section class="callout" style="background-color:rgba(0, 0, 0, 0.877);padding-top: 30px;">
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
		 <!-- GO TO TOP -->
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
<script type="text/javascript">
	let progress= document.getElementbyId('progressBar');
	let totalHeight=document.body.scrollHeight= window.innerHeight;
	window.onscroll=function(){
		let progressHeight= (window.pageYOffset/totalHeight*100;)
		progress.style.height=progressHeight+ "%";
	}
</script>
<script src="js1/jquery-1.11.3.js"></script>
<script src="js1/wow.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/own-menu.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/jquery.isotope.min.js"></script>
<script src="js1/jquery.nouislider.min.js"></script>
<script src="js1/jquery.flexslider-min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js1/main.js"></script>
<script>
    jQuery(document).ready(function($) {

        //  Price Filter ( noUiSlider Plugin)
        $("#price-range").noUiSlider({
            range: {
                'min': [0],
                'max': [1000]
            },
            start: [40, 940],
            connect: true,
            serialization: {
                lower: [
                    $.Link({
                        target: $("#price-min")
                    })
                ],
                upper: [
                    $.Link({
                        target: $("#price-max")
                    })
                ],
                format: {
                    // Set formatting
                    decimals: 2,
                    prefix: '$'
                }
            }
        })
    })

</script>
</body>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
</html>
<?php } ?>