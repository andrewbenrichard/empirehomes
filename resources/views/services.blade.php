@extends('layouts.app')

@section('content')

 <!-- Mextreo Hero Section -->
 <section class="mextreo-hero inner mar-bot-50">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-content">
          <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">our Service</h6>
          <h2 data-aos="fade-up" data-aos-duration="2000">
          We are a leader in real estate and property management innovation 
          </h2>
         
          <ul>
            <li data-aos="fade-up" data-aos-duration="1700">Architectural Design</li>
            <li data-aos="fade-up" data-aos-duration="1800">Real Estate Construction</li>
            <li data-aos="fade-up" data-aos-duration="2100">Interior & Exterior Design</li>
            <li data-aos="fade-up" data-aos-duration="2500">Home & office maintenance service</li>
            <li data-aos="fade-up" data-aos-duration="2800">Renovation</li>
            <li data-aos="fade-up" data-aos-duration="3000">Property online Listing</li>
          </ul>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="hero-inner-img">
          <img
            src="public/assets/front/img/hero/service-hero.jpg"
            alt
            data-aos="fade-left"
            data-aos-duration="2000"
          />
          <img
            src="public/assets/front/img/hero/service-hero2.jpg"
            alt
            class="hero-inner-2"
            data-aos="fade-up"
            data-aos-duration="3000"
          />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Mextreo Hero Section-->
<section class="project-gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
          <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio1.jpg">
            <img src="public/assets/front/img/portfolio/portfolio2.jpg" alt />
            <i class="flaticon-add rp-icon"></i>
          </a>
          <div class="sp-text">
            <h3>Architectural Design</h3>
            <p>Contact us</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
          <a data-fancybox="gallery" href="handymen.myempirehomes.com">
            <img src="public/assets/front/img/portfolio/handymen.jpg" alt />
            <i class="flaticon-add rp-icon"></i>
          </a>
          <div class="sp-text">
            <h3>Home & office maintenance service</h3>
            <p>Book Now</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
          <a data-fancybox="gallery" href="listings.myempirehomes.com">
            <img src="public/assets/front/img/portfolio/listing.jpg" alt />
            <i class="flaticon-add rp-icon"></i>
          </a>
          <div class="sp-text">
            <h3>Property online Listing</h3>
            <p>Find your next home</p>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>

@endsection