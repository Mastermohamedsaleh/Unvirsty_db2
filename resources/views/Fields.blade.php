<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Academy</title>
    <link rel="stylesheet" href="{{ URL::asset('Styles/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{URL::asset('Styles/welcome.css')}}" />
    <script src="{{URL::asset('Script/script/bootstrap.bundle.min.js') }}"></script>

       <!-- font -->
       <script
       src="https://kit.fontawesome.com/c1ef89d5e0.js"
       crossorigin="anonymous"
       defer
     ></script>

  </head>

  <body>  
      <!-- navbar -->

   
        
    
        
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

 
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('coursehome')}}">Course</a></li>
          <li><a class="nav-link   scrollto" href="{{url('fileds')}}">Fileds</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
   
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="{{url('login')}}">Login</a></li>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
        <!-- <i class="fa-solid fa-bars mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

              <!-- ============abt-01 Section  Start============ -->
              <section class="abt-01">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-wrapper">
                                <h3>Fields</h3>
                                <ol>
                                    <li>Home<i class="fa-solid fa-angles-right"></i></li>
                                    <li>Fields</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============abt-02 Section  Start============ -->








            <!-- middle -->
    <div class="container py-5">
      <div class="row">
        <div
          class="col-lg-5"
          style="
            height: 414px;
            background-image: url(Assets/images/13.png);
            background-size: cover;
            background-position: center;
          "
        >
          <div
            class="fs-1 text-white position-relative"
            style="top: 80%; left: 5%"
          >
            Computer Science
          </div>
        </div>
        <div
          class="col-lg-7 py-5"
          style="height: 414px; background-color: #1133ce"
        >
          <div
            class="my-auto h-100 w-75 py-3 px-2 d-flex flex-column justify-content-around"
          >
            <span class="fs-1 fw-semibold txt-green">Computer Science</span>
            <p class="fs-4 text-white">
              Computer Science is a field that encompasses the study of
              computation, algorithms, data structures .
            </p>
 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 py-5 bg-gray" style="height: 414px">
          <div
            class="my-auto h-100 w-75 py-3 px-2 d-flex flex-column justify-content-around"
          >
            <span class="fs-1 fw-semibold txt-darkblue"
              >Archetictural Engineering</span
            >
            <p class="fs-4 text-white">
              Architectural engineering is a multidisciplinary field that
              integrates principles from architecture and engineering to design
              and create buildings and other structures.
            </p>

          </div>
        </div>
        <div
          class="col-lg-5 position-relative"
          style="
            height: 414px;
            background-image: url(Assets/images/14.png);
            background-size: cover;
            background-position: center;
          "
        >
          <div
            class="fs-1 w-auto text-white position-absolute"
            style="top: 80%; left: 5%"
          >
            Architectural Engineering
          </div>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-5"
          style="
            height: 414px;
            background-image: url(Assets/images/15.png);
            background-size: cover;
            background-position: center;
          "
        >
          <div
            class="fs-1 text-white position-relative"
            style="top: 80%; left: 5%"
          >
            Business Adminstration
          </div>
        </div>
        <div
          class="col-lg-7 py-5"
          style="height: 414px; background-color:#1133ce"
        >
          <div
            class="my-auto h-100 w-75 py-3 px-2 d-flex flex-column justify-content-around"
          >
            <span class="fs-1 fw-semibold txt-green"
              >Business Adminstration</span
            >
            <p class="fs-4 text-white">
              Business Administration is a broad field of study and practice
              that encompasses various principles, strategies, and activities
              related to the management and operation of organizations
            </p>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 py-5 bg-gray" style="height: 414px">
          <div
            class="my-auto h-100 w-75 py-3 px-2 d-flex flex-column justify-content-around"
          >
            <span class="fs-1 fw-semibold txt-darkblue"
              >Electric Engineering</span
            >
            <p class="fs-4 text-white">
              Electrical engineers are responsible for creating innovative
              solutions in areas such as power generation, distribution,
              communication, control systems, and electronic circuits
            </p>

          </div>
        </div>
        <div
          class="col-lg-5 position-relative"
          style="
            height: 414px;
            background-image: url(Assets/images/14.png);
            background-size: cover;
            background-position: center;
          "
        >
          <div
            class="fs-1 w-auto text-white position-absolute"
            style="top: 80%; left: 5%"
          >
            Electric Engineering
          </div>
        </div>
      </div>
    </div>















  <!-- ======= Footer ======= -->
  <?php   $setting = App\Models\Setting::all();     ?>



             <!-- ======= Footer ======= -->
 <footer id="footer">

	
<div class="footer-top" >
  <div class="container">
    <div class="row">
@foreach($setting as $s)
      <div class="col-lg-4 col-md-6 footer-contact">
        <h3>Smart Education</h3>
        <p>
          {{$s->address}} <br>
          New Cairo, NY 535022<br>
           Cairo <br><br>
          <strong>Phone:</strong> +{{$s->phone}}<br>
          <strong>Email:</strong> {{$s->email}}<br>
        </p>
      </div>

      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
        <li><i class="fa-solid fa-angle-right"></i> <a href="#">Home</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="#">About us</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="#">Courses</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="#">Fileds</a></li>
        </ul>
      </div>


      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <div class="social-links mt-3">
        <a href="{{$s->link_twitter}}" class="twitter"><i class="fa fa-twitter"></i></i></a>
          <a href="{{$s->link_facebook}}" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="{{$s->link_linked_in}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

@endforeach
</footer><!-- End Footer -->