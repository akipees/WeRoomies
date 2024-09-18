<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeRoomies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/project.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/animate.min.css" rel="stylesheet">
    <link href="/carousel.min.css" rel="stylesheet">
    <link href="/bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <style>
body{
  font-family: 'Karla', sans-serif;
  background-color: #dfeef0;
  animation: "fadeInAnimation ease 9s";
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.fw-medium {
  font-weight: 600 !important;
}

.fw-semi-bold {
  font-weight: 700 !important;
}

.back-to-top {
  position: fixed;
  display: none;
  right: 45px;
  bottom: 45px;
  z-index: 99;
}

/*** Button ***/
.btn {
  font-family: 'Karla', sans-serif;
  font-weight: 600;
  transition: .5s;
  padding: 13px 20px 12px;
  background-color: #0d546a;
  border-radius: 4px;
  font-size: 17px;
  font-weight: bold;
  line-height: 20px;
  color: #fff;
  margin-bottom: 24px;
}

.btn:hover{
  background-color: #000;
  color: #fff;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #0d546a;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 0px;
}



/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url(../img/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}

.image.img{
    float:center;
    width:100%;
    height:100%;
    object-fit:cover;
}
@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.mb-4,.fa,.mb-0{
    color: #000;
}

    </style>
</head>
<body style="background-color:#dfeef0">
    <!-- main Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                    <h2 class="display-1">Why WeRoomies?</h2>
                    <h4 class="mb-4">Discover better place to live</h4>
                    <p class="mb-4">Most students living in a different city for studies
                        prefer rooms and flats with Paying Guest arrangements over hostels.
                        But searching for these houses can be a difficult task.
                        We aim to make this task easier by providing a website where the owners of the house can                        
                        advertise their houses and the students can look                       
                        for houses and choose the one that suits them the                        
                        best.
                    </p>
                    <a class="btn rounded-pill py-3 px-5" href="">Go Back to the Top</a>
                </div>
            </div>
        </div>
    </div>
    <!-- main End -->
        
    
    <div class="container" style="margin-bottom:60px;">
        <div class="row g-5">
            <div class="col-lg-6" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
              <img src="<?php echo base_url('./teallogin.jpg'); ?>" class="rounded-circle" style="margin-top:18px;padding:10px;float:center;width:100%;height:100%;object-fit:cover;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-top:50px;">
                <h6 class="section-title text-start pe-3" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                  About Us
                </h6>
                <h1 class="mb-4" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                  Welcome to WeRoomies
                </h1>
                <p class="mb-4" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                  Finding houses with paying guest arrangements is hard as there are no much websites available for that.
                </p>
                <p class="mb-4"></p>
                <div class="row" style="animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> Best Rooms</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> Standard Locality</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> RO Water</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> Hot Water</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> High Security</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i> 24/7 Service</p>
                    </div>
                </div>
                <a class="btn" href="/about" style="margin-top:15px;animation:fadeInAnimation ease 3s;animation-iteration-count:1;animation-fill-mode:forwards;">
                  Read More
                </a>
            </div>
        </div>
    </div>
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script>
      (function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

    </script>
</body>
</html>