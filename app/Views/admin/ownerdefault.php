<!doctype html>
<html>
<head>
    <title>My Layout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="/project.png">  

    <style>
      body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #fff;
  height: 200vh;
  position: relative; }
  body:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    opacity: 0;
    visibility: hidden;
    z-index: 1; }
  body.offcanvas-menu:before {
    opacity: 1;
    visibility: visible; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }


.site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: absolute;
   top: 2rem; 
  width: 100%;
  background-color: #0d546a; 
 }

.site-navbar .site-navigation .site-menu {
  margin-bottom: 0;
  position: relative;
  right: 0; }
.site-navbar .site-navigation .site-menu .active > a span {
  color: #fff;
  border-radius: 30px;
  display: inline-block;
  padding: 5px 20px; }
.site-navbar .site-navigation .site-menu a {
  text-decoration: none !important;
  display: inline-block; }
.site-navbar .site-navigation .site-menu > li {
  display: inline-block; }
.site-navbar .site-navigation .site-menu > li > a {
  padding: 10px 0px;
  color: #fff;
  font-size: 16px;
  text-decoration: none !important; }
.site-navbar .site-navigation .site-menu > li > a > span {
  padding: 5px 20px;
  display: inline-block;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  border-radius: 30px; }
.site-navbar .site-navigation .site-menu > li > a:hover > span {
  color: #FFD700;
  border-radius: 30px;
  display: inline-block; }

/* Page content */
.content {
  padding: 16px;
}

footer {
  background: #0d546a;
  color: white;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #000;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}

/*SOCİAL İCONS*/

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoInstagram:hover {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);   
}

.social-network a.icoTwitter:hover {
  background-color: #00acee;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoInstagram:hover i, .social-network a.icoTwitter:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}
   </style>
</head>
<body>
    <!-- Header -->
    <header class="site-navbar" role="banner">
      <div class="container" >
        <div class="row align-items-center" id="myHeader">
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/flat"><span>Flat</span></a></li>
                <li><a href="/room"><span>Room</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
      </div> 
    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Header Ends -->

    <?= $this->renderSection('content') ?>

    <!-- Footer -->
    <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
          <!--Column1-->
            <div class="footer-pad">
              <h4>Accomodation</h4>
              <ul class="list-unstyled">
                <li><a href="#"></a></li>
                <li><a href="/room">Room</a></li>
                <li><a href="/flat">Flat</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
          <!--Column2-->
            <div class="footer-pad">
              <h4>About Us</h4>
              <ul class="list-unstyled">
                <li><a href="/about">Project</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
          <!--Column3-->
            <div class="footer-pad">
              <h4>Contact Us</h4>
              <ul class="list-unstyled">
                <li><a>9876543210</a></li>
                <li><a>seepikawallabh@gmail.com</a></li>
                <li><a>Sangamner</a></li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
    	    <div class="col-md-3">
            <!--Column 4-->
    	    	<h4>Follow Us</h4>
              <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              </ul>				
		      </div>
        </div>
	      <div class="row">
	      	<div class="col-md-12 copy">
	      		<p class="text-center">&copy; Copyright 2023 - WeRoomies.  All rights reserved.</p>
	      	</div>
	      </div>
      </div>
    </div>
  </footer>
    <!-- Footer Ends -->
</body>
</html>