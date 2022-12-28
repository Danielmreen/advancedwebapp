<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>EventHub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    
                        <a href="/" style="font-family:sans-serif;font-size:50px;text-align:left;color:white"> EventHub</a>
                   
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                        
                        <li><a href="/">Explore</a></li>
                        <li>
                          @if (Route::has('login'))
                       <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li>
                          <x-app-layout> 
                         </x-app-layout>
                        </li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif</li>
                    </ul>   
                    <!--<a class='menu-trigger'>
                        <span>Menu</span>
                    </a>-->
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>BROWSE EVENTS</h2>
          
          </div>
        </div>
      </div>
      <img src="assets/images/jccu.jpg" alt="" style="width:40%;height:50%;:right">
     <h1>JCCU MOVIE NIGHT</h1>
     By <a href="https://linktr.ee/jccuniten">Japanese Culture Club UNITEN</a><br><br>
     <h2>About this event</h2><br><br>
      Konnichiwa UNITENIANS!!👋👋

Tired of watching movies alone at home?👀

Worry not because Japanese Culture Club Uniten will be having a Movie night for all students.Take date night at home to the next level by taking part in this movie screening.📹📽️🎬

Food and drinks will also be available there. 🍿🥤

Details of the event is as per below:

Movie Title:Rurouni Kenshin:The Beginning
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 100 quota</li>
                          <li><i class="fa fa-calendar" ></i> 1/12/2022</li>
                          <li><i class="fa fa-clock"></i> 7.30pm-11.00pm</li>
                          <li><i class="fa fa-map-marker" aria-hidden="true"></i> Twin Lecture Theatre(BV)</li>
                          <li><i class="fa fa-dollar" aria-hidden="true"></i> JCCU Member-FREE  Non-Member-RM5</li>
                        </ul>
                        <div style="text-align:right">
                        <div class="main-button">
                          <a href="">JOIN</a>
                        </div>
                        <div class="main-button">
                          <a href="">BACK</a>
                        </div>
                        </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  
  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
