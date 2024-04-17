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
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('coursehome')}}">Course</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">College</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
   
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="{{url('login')}}">Sing Up</a></li>
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
                                <h3>About Us</h3>
                                <ol>
                                    <li>Home<i class="fa-solid fa-angles-right"></i></li>
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

         <!-- ======= Team Section ======= -->
         <section id="team" class="team section-bg  mt-3">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="text-center">TEAM</h2>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/images/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
  
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/images/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>

              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/images/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
             

              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/images/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

          

     
     
      <!-- ======= Footer ======= -->
 <footer id="footer" >

<div class="footer-newsletter">
  <!-- <div class="container"> -->


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Smart Education</h3>
        <p>
        Smart Education Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
     
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
 
        </div>
      </div>

    <!-- </div> -->
  </div>
              </div>


</footer><!-- End Footer -->

      






  </body>