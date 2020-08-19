<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Empire Homes">
    <meta name="keywords" content="Empire Homes">
<title>{{$title}} | My Empire Homes</title>
    <link rel="icon" href="{{ asset('/public/assets/images/favicon/1.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/public/assets/images/favicon/1.png') }}" type="image/x-icon">
      
    <!--- Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">

<!-- CSS -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/public/assets/front/css/bootstrap.min.css">
<!-- Jquery ui CSS -->
<link rel="stylesheet" href="/public/assets/front/css/jquery-ui.css">
<!-- Fancybox CSS -->
<link rel="stylesheet" href="/public/assets/front/css/jquery.fancybox.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="/public/assets/front/css/font-awosome.css">

<!-- Flaticon CSS -->
<link rel="stylesheet" href="/public/assets/front/flat-font/flaticon.css">
<!-- Ticker css-->
<link rel="stylesheet" href="/public/assets/front/css/ticker.min.css">
<!--Owl carousel Slider -->
<link rel="stylesheet" href="/public/assets/front/css/owl.carousel.min.css">
<link rel="stylesheet" href="/public/assets/front/css/owl.theme.default.min.css">
<!-- Nav Menu CSS -->
<link rel="stylesheet" href="/public/assets/front/css/sm-core-css.css">
<link rel="stylesheet" href="/public/assets/front/css/sm-mint.css">
<link rel="stylesheet" href="/public/assets/front/css/sm-style.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="/public/assets/front/css/aos.css">
<link rel="stylesheet" href="/public/assets/front/css/animate.min.css">

<!-- Revulation Slider -->
<link rel="stylesheet" href="/public/assets/front/sliders/slider-1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="/public/assets/front/sliders/slider-1/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="/public/assets/front/sliders/slider-1/css/rs6.css">
<!-- Main StyleSheet CSS -->
<link rel="stylesheet" href="/public/assets/front/css/style.css">
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="/public/assets/front/img/favicon.png">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">


  
   
</head>
<body>
  
  <div class="site-wrapper">

    @include('layouts.front_header')
    
    @yield('content')
    
    <!--Scroll Top-->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="flaticon-up scrollup-icon"></i>
    </button>
    
    
    
    <a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
    
  </div>

    
    @include('layouts.front_extras')
    
</body>
</html>
