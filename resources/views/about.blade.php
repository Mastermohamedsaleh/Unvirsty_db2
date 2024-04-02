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




    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 left-item">
                    <ul>
                        <li><i class="fas fa-envelope-square"></i> sales@smarteyeapps.com</li>
                        <li><i class="fas fa-phone-square"></i> +123 987 887 765</li>
                    </ul>
                </div>
                <div class="col-lg-5 d-none d-lg-block right-item">
                    <ul>
                        <li><a><i class="fab fa-github"></i></a></li>
                        <li><a><i class="fab fa-google-plus-g"></i></a></li>
                        <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a><i class="fab fa-twitter"></i></a></li>
                        <li> <a><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
  
        </div>
    </div>
  
  
  
  
  
  
  
  
      <!-- navbar -->

   
        
     <div class="navbar-total">
     
      <nav
        class=" navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
       >
        <div class="container-fluid" style="background-color:#002db3; padding: 9px;">
          <a class="navbar-brand ms-4" href="#"
            ><img
              src="Assets/images/logo.png"
              alt="Smart Academy logo"
              class="w-75 h-75"
          /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active text-white"
                  aria-current="page"
                  href="{{url('/')}}"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{url('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{url('coursehome')}}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">College</a>
              </li>
       
      
            </ul>
  
            <button class="btn btn-outline-primary mx-5 px-5" type="submit">
              Sign in
            </button>
          </div>
        </div>
      </nav>

    </div>



              <!-- ============abt-01 Section  Start============ -->

              <section class="abt-01">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-wrapper">
                                <h3>About Us</h3>
                                <ol>
                                    <li>Hmoe<i class="fa-solid fa-angles-right"></i></li>
                                    <li>About Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- ============abt-02 Section  Start============ -->





             <section class="abt-02">
            <div class="container">
                <div class="row">
                    <div class="abt-main d-flex">
                        <div class="abt-spirit">
                            <div class="image-box">
                                <img src="assets/images/about2.jpg">
                            </div>
                        </div>
                        <div class="abt-spirit">
                            <div class="abt-content-card">
                                <h2>About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequuntur veritatis fugit est
                                    provident quibusdam quis reiciendis, beatae neque harum maxime laborum. Esse, deserunt sunt debitis
                                    quasi officiis molestiae necessitatibus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequuntur veritatis fugit est
                                    provident quibusdam quis reiciendis, beatae neque harum maxime laborum. Esse, deserunt sunt debitis
                                    quasi officiis</p>
                    
                                <span>
                                    <a href="#">Follow Us</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



 <!-- ============bg-se-04  Section  Start============ -->

 <section class="bg-se-04">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <div class="counting" data-count="20">100</div>
                    <h5>YEAR OF HISTORY</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div class="counting" data-count="80">100</div>
                    <h5>ACTIVE STUDENTS</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-globe"></i>
                    <div class="counting" data-count="27">100</div>
                    <h5>ONLINE COURSES</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-registered"></i>
                    <div class="counting" data-count="62">100</div>
                    <h5>REGISTERED STUDENTS</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============bg-se-06  Section  Start============ -->






 <!-- ################# Our Instructors Starts Here#######################--->    

 <div class="our-instructor">
    <div class="container">
         <div class="session-title row">
            <h2>Our Instructors</h2>
        </div>
        <div class="instruct-row row">
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/avatar-2.jpg" alt="">
                <h6>Andre Jhon</h6>
                <p>Graphic Design</p>
           
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/avatar-3.jpg" alt="">
                <h6>Ahalkji Jhon</h6>
                <p>Graphic Design</p>
                
       
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/avatar-5.jpg" alt="">
                <h6>Reniju Sam</h6>
                <p>Graphic Design</p>
                
        
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/avatar-4.jpg" alt="">
                <h6>Depak Andrw</h6>
                <p>Graphic Design</p>
                
        
                </div>
            </div>
        </div>
    </div>
  </div> 
          
<!-- Footer -->

<footer id="footer" class="section" style="width: 100%; ">

    <!-- container -->
    <div class="container">
  
      <!-- row -->
      <div class="row">
  
   
  
        <!-- footer nav -->
        <div class="col-12">
          <ul class="footer-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- /footer nav -->
  
      </div>
      <!-- /row -->
  
      <!-- row -->
      <div id="bottom-footer" class="row" >
  
  
  
        <!-- copyright -->
        <div class="col-md-8 col-md-pull-4">
          <div class="footer-copyright">
            <span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by </span>
          </div>
        </div>
        <!-- /copyright -->
  
  
  
              <!-- social -->
              <div class="col-md-4 col-md-push-8">
                <ul class="footer-social">
                  <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <!-- /social -->
  
  
  
  
      </div>
      <!-- row -->
  
    </div>
    <!-- /container -->
  
  </footer>
  
  <!-- Footer -->





  </body>