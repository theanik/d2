<!DOCTYPE html>
<html lang="en">

<head>
  
<!--======== Meta Seo Start =======-->
  <meta name="description"
    content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project.">
  <meta name="author" content="Designer Country">
  <meta name="distribution" content="Global">
  <meta name="theme-color" content="#009b97">
  <meta name="theme-color" content="#007571">
  <meta name="rating" content="General">
  <meta name="keywords" content="Clipping Path & Photo Cut out">
  <link rel="canonical" href="http://www.designercountry.com/">
  <!--** Twitter meta **-->
  <meta name="twitter:site" content="@designercounty">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title"
    content=" Clipping Path Service Provider | Remove Image Background | Digital Retouching | Image masking | Image &amp; Photo Editing Designer Country">
  <meta name="twitter:description"
    content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project." />
  <!--**  Open Graph Meta **-->
  <meta property="og:locale" content="en-US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Designer Country">
  <meta property="og:title" content="Designer Country Service Provider | Image &amp; Photo Editing">
  <meta property="og:url" content="http://www.designercountry.com">
  <meta property="og:description"
    content="DC- Perfect High-quality, professional clipping paths and image-editing services, Image masking, color-correction,Photo Retouching, Removal Background, Shadow Service. Get a quote for your next project.">
<!--======== Meta Seo End =======-->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!--==** Logo **==-->
  <link rel="icon" href="{{asset('assets/frontEnd/images/home_page/Dc_Logo.png')}}" type="image/x-icon">
  <!--==** Bootstrap CDN Link **==-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--==** Ajax CDN Link **==-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--==** Jquery Link **==-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <!--==** Font Awesome Link **==-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- Carousel -->
  <link rel="stylesheet" href="{{asset('assets/frontEnd/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/owl-carousel/css/owl.theme.default.min.css')}}">
  <!--==** Css Link **==-->
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/responsive.css')}}">
  @yield ('css')
  <style>
    .error{
      color: #FF0000;
    }
    .dropdown-toggle::after {
    border-top: .0em solid;

    }

  </style>
</head>

<body>
  <!--==** Header Section Start **==-->
  <section id="header">
    <div class="px-md-5 px-sm-3 px-xs-2">
      <nav class="menu navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('index')}}">
            <img class="logo horizontal-logo" src="{{asset('assets/frontEnd/images/home_page/logo.png')}}" alt="designer_country_logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown1" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('clipping.path')}}">Clipping Path</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('background.removal')}}">Background Removal</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('image.masking')}}">Image Masking</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('natural.shadow')}}">Natural Shadow</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('photo.retouching')}}">Photo Retouching</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('ghosht.manneuquin')}}">Ghost Mannequin</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('product.photo.editing')}}">Product Photo Editing</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('color.correction')}}">Color Correction</a>
                  <a class="dropdown-item py-md-2 py-sm-1 py-xs-0" href="{{route('vector.conversion')}}" style="border: none;">Vector Conversion</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('pricing')}}">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('sample')}}">SAMPLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('get.quote')}}">GETQUOTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('upload')}}">UPLOAD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('contact')}}">CONTACT</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown2" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCOUNT</a>
                <div class="account-section dropdown-menu" aria-labelledby="navbarDropdown2" style="background-color: #283E4B; color: white;">
                  @if (auth()->user())
                    <a class="nav-link text-light" href="{{ route('myprofile') }}" style="border-bottom:1px solid #009b97;">My Profile</a>
                    <a class="nav-link text-light" href="https://designercountry.wetransfer.com/" target="_blank" style="border-bottom:1px solid #009b97;">My Order</a> 
                    <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a> 
                  @else
                    <a class="nav-link text-light" href="{{route('login')}}" style="border-bottom:1px solid #009b97;">Login</a>
                    <a class="nav-link text-light" href="{{ route('register') }}">Registration</a>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!--==** Header Section End **==-->
  @yield ('content')
  <!--==** Footer Section Start **==-->
  <section id="footer">
    <div class="container pt-md-5 pt-sm-3 pt-xs-2">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="e-footer py-md-4 py-sm-4 col-md-3 information">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Information</span></h5>
          <ul class="pt-md-4 pt-sm-2 pt-xs-2"> 
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>
            <li><a href="{{route('sample')}}">Samples</a></li>
            <li><a href="{{route('terms.and.conditions')}}">Terms & Condition</a></li>
            <li><a href="{{route('privacy.and.policy')}}">Privacy & Policy</a></li>
            <li><a href="{{route('refund.policy')}}">Refund Policy</a></li>
            <li><a href="{{route('sitemap')}}">Sitemap</a></li>
          </ul>
        </div>
        <div class="e-footer py-md-4 py-sm-4 col-md-3  company">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Company</span></h5>
            <ul class="pt-md-4 pt-sm-2 pt-xs-2">
              <li><a href="{{route('about.us')}}">About</a></li>
              <li><a href="{{route('pricing')}}">Pricing</a></li>
              <li><a href="{{route('payment.method')}}">Payment Method</a></li>
              <li><a href="{{route('contact')}}">Support Center</a></li>
            </ul>
        </div>
        <div class="e-footer py-md-4 py-sm-4 col-md-3  get-started">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Get Started</span></h5>
            <ul class="pt-md-4 pt-sm-2 pt-xs-2">
              <li><a href="{{route('index')}}">Home</a></li>
              <li><a href="{{route('get.quote')}}">Get quote</a></li>
              @if (auth()->user())
                <li><a href="{{route('logout')}}">Already Loged in</a></li>
              @else
                <li><a href="{{route('login')}}">Log in</a></li>
                <li><a href="{{ route('register') }}">Sig up</a></li>
              @endif
            </ul>
          </div>
        </div>
      <div class="col-md-1"></div>
      <hr style="border-bottom: 1px solid rgb(88, 145, 175);">
    </div>
    <div class="social-media text-center py-md-5 py-sm-5 py-xs-2">
      <div class="social-link">
        <a href="https://www.facebook.com/designercountry/" target="_blank">
          <i class="fab fa-facebook-f" style="padding: 12px 16px;"></i>
        </a>
        <a href="https://twitter.com/designercounty" target="_blank">
          <i class="fab fa-twitter"style="padding: 12px 12px;"></i>
        </a>
        <a href="https://www.linkedin.com/company/designercountry/" target="_blank">
          <i class="fab fa-linkedin-in"style="padding: 12px 13px;"></i>
        </a>
        <a href="https://www.instagram.com/designercountry/" target="_blank">
          <i class="fab fa-instagram" style="padding: 12px 13px;"></i>
        </a>
        <a href="https://www.pinterest.com/designercountry/" target="_blank">
          <i class="fab fa-pinterest"></i>
        </a>
        <a href="https://www.youtube.com/channel/UC8koMuw6KCEB4CchEtrKzlA" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
    <div class="copy-right pb-5">
      <p class="text-center text-light pt-3  pb-4 px-4">Designer Country is a brand of <a href="#"
          style="color: #19beb9;">Photoshopspecialist</a>. © 2020 All rights reserved.</p>
    </div>
  </div>
  </section>
  <!--==** Footer Section Start **==-->
  <!--==*** MenuBar Scrip Link **==-->
  <script>
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
      if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
          function () {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
          },
          function () {
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
  </script>
  <!--==*** MenuBar Scrip Link **==-->

  <!--==*** Java Scrip Link **==-->
  @yield ('js')
  <!--==*** Java Scrip Link **==-->
  <!--==*** Script  Link **==-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!--==*** Script  Link **==-->
  <!--Owl Carousel Script-->
  <script src="{{asset('assets/frontEnd/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay: 1000,
      responsiveClass: true,

      responsive: {
        0: {
          items: 3,
          nav: true
        },
        600: {
          items: 4,
          nav: false
        },
        1000: {
          items: 6,
          nav: true,
          loop: false
        }
      }
    });
  </script>
  <!--Owl Carousel Script-->
 
</body>
</html>
