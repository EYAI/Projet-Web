<?php
include "C:\wamp64\www\melodyo\Core\commentaireOps.php";
include "C:\wamp64\www\melodyo\Core\config.php"; 
$commentaireOps = new commentaireOps();
$liste = $commentaireOps->getCommentaire();
?>
<!DOCTYPE html>
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
	<script src="https://use.fontawesome.com/2903eb4599.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



</head>

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
								<li><a href="acceuil.html"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="cart.html"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
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
										<li><a href="blog-standard.php">Melodyo's Blog</a></li>
									
									</ul>
								</li>
								<li><a href="contact-us.html">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
        </header>
        
		<main id="main">
			<section class="hero-sec bg-full" style="background-image:url(images/imgg01.jpg);">
				<div class="caption">
					<h1 class="heading text-center">Blog Single</h1>
				</div>
			</section>
			<section class="blog-sec style2 container">
				<div class="row">
					<div class="col-xs-12">
						<article id="content">
							<div class="blog-col">
								<div class="img-holder">
									<a href="#"><img class="img-responsive" src="images/imgg03.jpg" alt="image description"></a>
									<time class="text-uppercase date" datetime="03-18">18 mar</time>
								</div>
								<ul class="comment-list list-unstyled">
									<li><i class="fa fa-comment-o" aria-hidden="true"></i> 34 Comments / by  </li>
									<li><a href="#"> Admin</a> </li>
								</ul>
								<h4 class="heading">Music: pleasure and pain</h4>
								<p>The musicologists looked at the emotional experiences associated with sad music of 2,436 people across three large-scale surveys in the UK and Finland.

They identified the reasons for listening to sad music, and emotions involved in memorable experiences related to listening to sad music.

Writing in the scientific journal PLOS ONE, the researchers said that the majority of people surveyed highlighted the enjoyable nature of such experiences, which in general lead to clear improvement of mood.

The researchers said that listening to sad music led to feelings of pleasure related to enjoyment of the music in some people, or feelings of comfort where sad music evoked memories in others.

However, a significant portion of people also reported painful experiences associated with listening to sad music, which invariably related to personal loss such as the death of a loved one, divorce, breakup, or other significant adversity in life.

The research was funded by the Academy of Finland.

Lead researcher Professor Tuomas Eerola, Professor of Music Cognition in the Department of Music, Durham University, said: "Previous research in music psychology and film studies has emphasised the puzzling pleasure that people experience when engaging with tragic art.

"However, there are people who absolutely hate sad-sounding music and avoid listening to it. In our research, we wanted to investigate this wide spectrum of experiences that people have with sad music, and find reasons for both listening to and avoiding that kind of music.

"The results help us to pinpoint the ways people regulate their mood with the help of music, as well as how music rehabilitation and music therapy might tap into these processes of comfort, relief, and enjoyment.

"The findings also have implications for understanding the paradoxical nature of enjoyment of negative emotions within the arts and fiction."

Study co-author Dr Henna-Riikka Peltola from the University of Jyväskylä, in Finland said sad music led to mixed emotions.

Dr Peltola added: "There seem to be two types of enjoyable experiences evoked by sad music listening.

"In these instances, music is typically the central source of these experiences, and aesthetic qualities were very much involved in the experienced pleasure.

"Alternatively, sad music is also associated with a set of emotions that give comfort to the listener, and where memories and associations play a strong part of making the experience pleasant. These experiences were often mentioned to confer relief and companionship in difficult situations of life.

"However, a large number of people also associated sad music with painful experiences. Such intense experiences seemed to be mentally and even physically straining, and thus far from pleasurable."

The three types of experience associated with listening to sad music (pleasure, comfort and pain) were found across the different surveys.

The researchers added that experiences of enjoyable sadness were not affected by gender or age, although musical expertise and interest in music seemed to amplify these feelings.

Older people reported stronger experiences of comforting sadness, while strong negative feelings when listening to sad music were more pronounced for younger people and women.

Each type of emotional experience associated with sad music could be connected to a distinct profile of reasons, psychological mechanisms, and reactions, the researchers added.

Professor Eerola added: "We think that this demonstrates well the functional nature of these experiences.

"Although the positive experiences seemed to be the most frequently associated with sad music, truly negative experiences are not uncommon in any of the samples in our research."

Commenting on the study Professor Jörg Fachner, Professor of Music, Health and the Brain, at Anglia Ruskin University, who was not part of the research team, said: "This study confirms that music therapists can work with authentic experiences when using music representing the sorrowful and painful content of sad life events such as the death of a spouse or child.</p>


                               <blockquote class="text-center">
									<q>La musique c'est le complément de la parole, du bruit et du silence qui relie, notre corps et notre esprit conscient et inconscient,  <br class="hidden-xs">à tous les univers sensibles et insensibles, perceptibles et imperceptibles, finis et infinis.</q>
								</blockquote>
								<p>"Some people enjoy sad music and derive a lot of comfort out of such music in certain situations but when a particular piece of music becomes a container for a negative emotion related to a personal or environmental challenge, a music therapist would carefully start working on its representations.
                                    "A skilful, trained music therapist can sense and adapt to the individual meaning of the sad music representing negative experiences and memories as described in this study."</p><br>
								<footer class="footer">
									<ul class="list-unstyled social-network">
										<li class="heading">Share</li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<ul class="list-unstyled tags-list">
										<li class="heading">Tags:</li>
										<li><a href="index-2.html">Home,</a></li>
										<li><a href="aboutus.html">About Us,</a></li>
										<li><a href="contact-us.html">Contact Us</a></li>
									</ul>
								</footer>
							</div>
							<div class="holder">
								<h1 class="heading2">Related Posts </h1>
								<div class="row">
									<div class="col-sx-12 col-sm-6">
										<div class="blog-col blog text-center">
											<div class="img-holder overlay">
												<img src="images/imgg13.jpeg" alt="image" class="img-responsive">
												<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
												<time class="text-uppercase date" datetime="2018-02-03 20:00">mar 18</time>
											</div>
											<ul class="comment-list list-unstyled">
												<li><i class="fa fa-comment-o" aria-hidden="true"></i> 34 Comments / </li>
												<li>by <a href="#"> Admin</a></li>
											</ul>
											<h4><a href="single-blog.html"> All this mistaken idea of denouncing pleasure and praise pain</a></h4>
										</div>
									</div>
									<div class="col-sx-12 col-sm-6">
										<div class="blog-col blog text-center">
											<div class="img-holder overlay">
												<img src="images/imgg05.png" alt="image" class="img-responsive">
												<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
												<time class="text-uppercase date" datetime="2018-02-03 20:00">nov 26</time>
											</div>
											<ul class="comment-list list-unstyled">
												<li><i class="fa fa-comment-o" aria-hidden="true"></i> 16 Comments /</li> 
												<li>by <a href="#"> Admin</a></li>
											</ul>	
											<h4><a href="single-blog.html"> Together we grow, together we creat, And together we share this beautiful art called MUSIC </a></h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="contact-sec">
								<h2>Post a Comment</h2>
								<form class="contact-form" method="POST" action="AjoutCommentaire.php">
									<fieldset>
										<div class="form-group">
											<div class="col">
												<input class="form-control lg-round" placeholder="Name" type="text" name="Name" id="Name">
											</div>
											<div class="col">
												<input class="form-control lg-round" placeholder="Email" type="email"name="Email" id="Email">
                                            </div>
                                            
										</div>
										<textarea class="lg-round" placeholder="Comments"name="MSG" id="MSG"></textarea>
										<button class="btn-primary text-center text-uppercase lg-round" type="submit"  >post comment </button> 
									</fieldset>
								</form>
							</div>
							<script>
							function filterText(sText) {
var reBadWords = "con";
return sText.replace(reBadWords, "***");
}
function showText() {
var oInput1 = document.getElementById("MSG");
var oInput2 = document.getElementById("msg");
oInput2.value = filterText(oInput1.value);
}
</script>					

                            <div class="card shadow-lg h-75 m-4 mt-8">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-success">Comments</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                 
                  <tbody>

                    <?php
                      foreach($liste as $row){ ?>
                        
                        
                    <style>
                        .chip {
                             display: inline-block;
                             padding: 0 25px;
                             height: 50px;
                             font-size: 16px;
                             line-height: 50px;
                             border-radius: 25px;
                             background-color: #f1f1f1;
                              }

                        .chip img {
                             float: left;
                             margin: 0 10px 0 -25px;
                             height: 50px;
                             width: 50px;
                             border-radius: 50%;
                                   }                               
					</style> 

                        
                        <div class="chip"><img src="images/img60.jpg" alt="Person" width="96" height="96"><?php echo $row['Name']; ?></div>
                           
						 <div id="msg" class="msg"style="margin-left:60px;";> <?php echo $row['MSG']; ?></div>
						 <br>
						 <style>
.like, .dislike {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background: #f6f6f6;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 4px;
}
.qty1, .qty2 {
    border: none;
    width:20px;
    background: transparent;
}
	</style>
		<script>
	$(function () {
         $(".like").click(function () {
             var input = $(this).find('.qty1');
             input.val(parseInt(input.val())+1);
    
         });
     
  });
					</script>

                        <div class="reaction">
						<div class="container"style="margin-left: 50px;"> 
    <a class="like"><i class="fa fa-thumbs-o-up"></i>  
        <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
    </a>
  
  <a class="like"><i class="fa fa-thumbs-o-down"></i>  
 <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
    </a>
  
    <button type="button" onclick="myFunction();" class="fa fa-reply" style="font-size:15px;">Reply</button>
</div>
	

    
</div>
							
							
						</div>

					<br>
	
					<style>
					#myForm{
						display: none ;
					}
					
					 </style>
            <div class="form-popup" id="myForm" style="margin-left:60px;">
            <form  class="contact-form" method="POST" action="AjoutCommentaire.php">
			<fieldset>
			<textarea class="lg-round" placeholder="   Add a reply....."name="MSG" id="MSG" style="width:300px;"></textarea>

			<button class="btn-primary text-center text-uppercase lg-round" type="submit" style="padding:10px 10px 10px 10px;margin-left:20px;"> Reply </button> 
		    <button class="btn-primary text-center text-uppercase lg-round" type="button" onclick="close();" style="padding:10px 10px 10px 10px;margin-left:20px;background-color:red;"> close </button> 
		</fieldset>
          </form>
		</div>
		<script>
function myFunction() {
  var x = document.getElementById("myForm");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};
function close(){
	var x = document.getElementById("myForm");
	if (x.style.display === "block") {
    x.style.display = "none";
  }	
}
</script>
				   <hr>
                        
                        <?php
                      }  
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



                        </article>


						<aside id="sidebar">
							<section class="widget">
								<form class="search-form" action="#">
									<fieldset>
										<input class="form-control" placeholder="Search...." type="search">
										<button class="submit-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									</fieldset>
								</form>
							</section>
							<section class="widget">
								<h3>Categories</h3>
								<ul class="list-unstyled category-list">
									<li><a href="#"><span class="icon fa fa-music"></span> Chopin</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> Mozart</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> Beethoven</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> Bach</a></li>
									
								</ul>
							</section>
							<section class="widget">
								<h3>Latest Posts</h3>
								<ul class="list-unstyled feature-list feature2">
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="images/imgg10.jpg" alt="image description"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">How to read music sheets</a></h3>
											<time class="time" datetime="2018-02-03 20:00">2 months ago</time>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="images/imgg06.jpg" alt="image"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">How to play the pano for rookies</a></h3>
											<time class="time" datetime="2018-02-03 20:00">1 Day ago</time>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="images/imgg11.png" alt="image"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">Liste of popular music sheets</a></h3>
											<time class="time" datetime="2018-02-03 20:00">5 mins ago</time>
										</div>
									</li>
								</ul>
							</section>
							<section class="widget">
								<h3>Archives</h3>
								<ul class="list-unstyled category-list">
									<li><a href="#"><span class="icon fa fa-music"></span> January 2018</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> February 2018</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> March 2018</a></li>
									<li><a href="#"><span class="icon fa fa-music"></span> April 2018</a></li>
								</ul>
							</section>
						</aside>
					</div>
				</div>
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
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
	<script src="Reaction.js"></script>

</body>

<!-- Mirrored from htmlbeans.com/html/petshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:01:31 GMT -->
</html>