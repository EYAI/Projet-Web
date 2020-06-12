	<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_expediteur"'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
               <img src="file:///C:/Users/hp/Downloads/undraw_compose_music_ovo2.svg"/>
               <br />
               <u>Nom d expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail d expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
               
            </div>
         </body>
      </html>
      ';
      mail("wiem.jebari@esprit.tn", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>
<html>
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
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     </ul>
                     <ul class="list-unstyled account-cart">
                        <li><a href="profil.php?ID=<?php echo $_SESSION['ID'];?>"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
                        <li><a href="cart.<?php  ?>"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
                        <li><a href="deconnexion.php"><i class="icon-user"></i><span class="hidden-xs">Déconnexion</span></a></li>
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
               
               <h1 class="heading text-center">Contact Us</h1>
               
            </div>
         </section>
         <section class="contact-sec container">
            <div class="row">
               <div class="col-xs-12 col-sm-8">
                 
                 
                     <fieldset>
      <h2>Formulaire de contact !</h2>
      <form class="contact-form" method="POST" action="">
         <input class="form-control lg-round" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
         <input class="form-control lg-round" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
         <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
         <input type="submit" value="Envoyer !" name="mailform"/>
      </form>
      <?php if(isset($msg)) {
         echo $msg;
      }
      ?>
        </fieldset>

                  
               </div>
               <script src="js1/jquery-1.11.3.js"></script>
<script src="js1/wow.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/own-menu.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/jquery.isotope.min.js"></script>
<script src="js1/jquery.nouislider.min.js"></script>
<script src="js1/jquery.flexslider-min.js"></script>
<script src="js1/main.js"></script>
   </body>
</html>