<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bicycle</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
  <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
<!---//End-rate---->

</head>
<body>
<div class="header">
    <div class="container">
        <div class="nav-top">
          <nav class="navbar navbar-default">
          
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            

          </div> 
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav ">
              <li><a href="/" class="hyper "><span>Home</span></a></li>  
              
              
              
              
              <li><a href="/merek" class="hyper"> <span>Merek</span></a></li>
              <li><a href="/tipe" class="hyper"><span>Tipe</span></a></li>
              <li><a href="/about" class="hyper"><span>About</span></a></li>

            </ul>
          </div>
          </nav>
          
        </div>      
</div>
  <!---->

        
@include('layouts._flash')
        @yield('content')

<!-- //footer -->
<div class="footer">
  <div class="container">
    <div class="col-md-3 footer-grid">
      <h3>About Us</h3>
      <p>Nam libero tempore, cum soluta nobis est eligendi 
        optio cumque nihil impedit quo minus id quod maxime 
        placeat facere possimus.</p>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Menu</h3>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="kitchen.html">Kitchen</a></li>
        <li><a href="care.html">Personal Care</a></li>
        <li><a href="hold.html">Household</a></li>             
        <li><a href="codes.html">Short Codes</a></li> 
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Customer Services</h3>
      <ul>
        <li><a href="shipping.html">Shipping</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
        <li><a href="faqs.html">Faqs</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="offer.html">Online Shopping</a></li>            
         
      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h3>My Account</h3>
      <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="wishlist.html">Wishlist</a></li>
        
      </ul>
    </div>
  </div>
</div>

</body>
</html> 