<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

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

p {
  color: #b3b3b3;
  font-weight: 300; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.hero {
  height: 100vh;
  width: 100%;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat; }

.site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: absolute;
   top: 2rem; 
  width: 100%; }
.site-navbar.transparent {
  background: transparent; }
.site-navbar.absolute {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%; }
.site-navbar .site-logo {
  position: relative;
  left: 0;
  font-size: 24px !important; }
.site-navbar .site-navigation .site-menu {
  margin-bottom: 0; }
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
.site-navbar .site-navigation .site-menu .has-children {
  position: relative; }
.site-navbar .site-navigation .site-menu .has-children > a span {
  position: relative;
  padding-right: 30px; }
.site-navbar .site-navigation .site-menu .has-children > a span:before {
  position: absolute;
  content: "\2304";
  font-size: 16px;
  top: 50%;
  right: 10px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-family: 'icomoon'; }
.site-navbar .site-navigation .site-menu .has-children .dropdown {
  visibility: hidden;
  opacity: 0;
  top: 100%;
  position: absolute;
  text-align: left;
  border-top: 2px solid #007bff;
  -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
  padding: 0px 0;
  margin-top: 20px;
  margin-left: 0px;
  background: #fff;
  -webkit-transition: 0.2s 0s;
  -o-transition: 0.2s 0s;
  transition: 0.2s 0s; }
.site-navbar .site-navigation .site-menu .has-children .dropdown a {
  text-transform: none;
  letter-spacing: normal;
  -webkit-transition: 0s all;
  -o-transition: 0s all;
  transition: 0s all;
  color: #343a40; }
.site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
  color: #007bff !important; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li {
  list-style: none;
  padding: 0;
  margin: 0;
  min-width: 200px; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
  padding: 9px 20px;
  display: block; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
  background: ##ededf5; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a {
  position: relative; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:after {
  position: absolute;
  right: 0;
  content: "\e315";
  right: 20px;
  font-family: 'icomoon'; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
  left: 100%;
  top: 0; }
.site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
  background: #0d546a; }
.site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
  color: #007bff; }
.site-navbar .site-navigation .site-menu .has-children:hover > a span, .site-navbar .site-navigation .site-menu .has-children:focus > a span, .site-navbar .site-navigation .site-menu .has-children:active > a span {
  color: #FFD700; }
.site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
  cursor: pointer; }
.site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
  -webkit-transition-delay: 0s;
  -o-transition-delay: 0s;
  transition-delay: 0s;
  margin-top: 0px;
  visibility: visible;
  opacity: 1; }
.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1; }

  .dropdown:hover{
    color: #0d546a;
  }

/* Page content */
.content {
  padding: 16px;
}


   </style>
  </head>
  <body>
    <header class="site-navbar" role="banner">
      <div class="container" >
        <div class="row align-items-center" id="myHeader">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">WeRoomies</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="/home"><span>Home</span></a></li>
                <li class="has-children">
                  <a><span>Accomodation</span></a>
                  <ul class="dropdown">
                    <li><a href="/rooms">Room</a></li>
                    <li><a href="/flats">Flat</a></li>
                  </ul>
                </li>
                <li><a href="about"><span>About Us</span></a></li>
                <li><a href="/"><i class="bi bi-person-fill"></i></i><span>Logout</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
      </div> 
    </header>
    <div>
    <img class="hero" src="<?php echo base_url('./reg.jpg'); ?>">
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>