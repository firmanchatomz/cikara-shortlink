<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/tema/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('/tema/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('/tema/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('/tema/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/tema/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('/tema/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/tema/css/chatomz.css')}}">
    <script type="text/javascript">  
      var counter = 10; 
      function countDown()
      {       
          if(counter>=0)
          {
              document.getElementById("timer").innerHTML = counter;
          }
          else
          { 
              download(); 
              return; 
          }
          counter -= 1; 
           
          var counter2 = setTimeout("countDown()",1000); 
          return; 
      } 
      function download()
      { 
          document.getElementById("link").innerHTML = "<a href='#shortlink' onclick='tampilkan()' class='btn btn-warning btn-sm' id='lanjut'>Klik Untuk Lanjut</a>";
      } 
      function tampilkan() {
        var x = document.getElementById("download");
        var y = document.getElementById("lanjut");
        var z = document.getElementById("tekstimer");
        if (x.style.display === "none") {
          x.style.display = "block";
          y.style.display = "none";
          z.style.display = "none";
        } else {
          x.style.display = "none";
        }
      }
     </script> 
  </head>
  <body onload="countDown();">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">Shortlink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Home</a></li>
            @foreach (Db::getmenu() as $item)
            <li class="nav-item text-capitalize"><a href="{{ url('/'.$item->nama)}}" class="nav-link">{{ $item->judul }}</a></li>
        @endforeach
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Shortlink.</h2>
              <p>a service commonly used by bloggers to shorten URLs to make it easier for people to remember long URLs or links from the blog in question..</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/')}}" class="py-2 d-block">Home</a></li>
                  @foreach (Db::getmenu() as $item)
                      <li><a href="{{ url('/'.$item->nama)}}" class="py-2 d-block">{{ $item->judul }}</a></li>
                  @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li class="py-2 d-block text-white">198 West 21th Street, Suite 721 New York NY 10016</li>
                <li class="py-2 d-block text-white">+ 1235 2355 98</li>
                <li class="py-2 d-block text-white">info@shortlink.com</li>
                <li class="py-2 d-block text-white">shortlink@gmail.com</li>
              </ul>
            </div>
          </div>
          {{-- <div class="col-md"> --}}
            {{-- <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div> --}}
          {{-- </div> --}}
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('/tema/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('/tema/js/popper.min.js')}}"></script>
    <script src="{{ asset('/tema/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('/tema/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/tema/js/aos.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('/tema/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('/tema/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('/tema/js/particles.min.js')}}"></script>
    <script src="{{ asset('/tema/js/particle.js')}}"></script>
    <script src="{{ asset('/tema/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('/tema/js/google-map.js')}}"></script>
    <script src="{{ asset('/tema/js/main.js')}}"></script>
      
    </body>
  </html>