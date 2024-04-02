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
    <nav
      class=" navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
     >
      <div class="container-fluid" style="background-color:#002db3; padding: 9px;">
        <a class="navbar-brand ms-4" href="#"
          ><img
            src="{{URL::asset('assets/images/logo.png') }}"
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
       
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#"
                >Contact us</a>
          

            </li>
  
    
          </ul>

          <a href="{{url('login')}}" class="btn btn-outline-primary mx-5 px-5" type="submit">
            Sign in
</a>
        </div>
      </div>
    </nav>

    <!-- carousel -->
    <div
      id="carouselExampleAutoPlaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="{{URL::asset('assets/images/elmhurst-university-gates-v3-hero-image.jpg') }}"  class="d-block w-100 c-img" alt="1" />
        </div>
        <div class="carousel-item c-item">
          <img src="{{URL::asset('assets/images/edd01-1.jpg') }}"  class="d-block w-100 c-img" alt="1" />
        </div>
      </div>
    </div>

    <div class="what-we-offer d-flex flex-column align-items-center">
      <div class="container border border-0 shadow rounded-top-3 my-3 w-75">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/3.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/4.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/5.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/6.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to Edusite</h2>
							<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
						</div>

						<!-- feature -->
						<div class="feature">
              <i class="feature-icon fa-solid fa-flask"></i>
							<div class="feature-content">
								<h4>Online Courses </h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Teachers</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="Assets/images/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->


















      



 <!-- About university -->
 <div class="about-university py-3" style="width:100% ;">
  <div class="container z-2">
    <div class="row my-5 py-5">
      <div class="col-sm-5">
        <section class="d-flex flex-column my-4">
          <div class="heading fs-1 fw-semibold txt-primary mb-5">
            About Our University
          </div>
          <img class="w-50" src="Assets/images/logo.png" alt="" />
        </section>
      </div>
      <div class="col-sm-7">
        <section>
          <div class="heading text-white">
            <p class="fs-1 fw-semibold my-2">
              Smart Academy: Empowering Minds, Shaping Futures
            </p>

            <p class="fs-4 my-5 txt-gray">
              At Smart Academy, we believe in the transformative power of
              education to unlock the full potential of individuals and
              drive positive change in the world. Our university is
              dedicated to fostering a dynamic learning environment that
              blends academic excellence with real-world applications,
              equipping students with the skills and knowledge needed to
              thrive in a rapidly evolving global landscape.
            </p>
          </div>
        </section>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-sm-3">
        <section class="m-3 p-2 text-center">
          <div class="card border-0 bg-transparent">
            <div class="span fs-1 fw-semibold txt-primary">22</div>
            <div class="span fs-3 text-white">Certified Professors</div>
          </div>
        </section>
      </div>
      <div class="col-sm-3">
        <section class="m-3 p-2 text-center">
          <div class="card border-0 bg-transparent">
            <div class="span fs-1 fw-semibold txt-primary">2000</div>
            <div class="span fs-3 text-white">Students</div>
          </div>
        </section>
      </div>
      <div class="col-sm-3">
        <section class="m-3 p-2 text-center">
          <div class="card border-0 bg-transparent">
            <div class="span fs-1 fw-semibold txt-primary">4</div>
            <div class="span fs-3 text-white">Education Fields</div>
          </div>
        </section>
      </div>
      <div class="col-sm-3">
        <section class="m-3 p-2 text-center">
          <div class="card border-0 bg-transparent">
            <div class="span fs-1 fw-semibold txt-primary">40</div>
            <div class="span fs-3 text-white">Awards Won</div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- our fields -->







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
        



 <!-- ============bg-se-01  Section  Start============ -->

 <section class="bg-se-01">
  <div class="container">
      <div class="row">
          <div class="heading">
              <h2>WHY SMART EDUCATION</h2>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-sm-2 order-2 order-md-0 order-lg-0 order-xl-0">
              <div class="main-card">
                  <div class="sub-card" >
                      <img src="assets/images/section.png" width="400px">
                  </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="main-card">
                  <div class="content">
                      <ol>
                          <li>
                              <h3>VARITY COURSES</h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae 
                                  voluptatum voluptates asperiores iusto errorquo sed nobis</p>
                          </li>
                          <li>
                              <h3>ATTRACTIVE PRICES</h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae 
                                  voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                          </li>
                          <li>
                              <h3>EVENTS</h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                  voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                          </li>
                          <li>
                              <h3>TALENTE TEACHERS</h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                  voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                          </li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ######################End Section######################## -->




<!-- ============bg-se-03  Section  Start============ -->






            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Featured Courses</h2>
                    </div>
                </div>



                <div class="popular-cources pc2">
    <div class="container">
        
        <div class="row courc-ro">
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/course_1.jpg" alt="">
                    <div class="cource-det">
                        <h6>Graphic Design</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/course_2.jpg" alt="">
                    <div class="cource-det">
                        <h6>Online Marketing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/course_3.jpg" alt="">
                    <div class="cource-det">
                        <h6>App Programing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            
       


</div>
 
<div class="viewall">
<a href="{{url('coursehome')}}" class="button-course">
              <i class="fa-solid fa-arrow-right-long"></i> View More
</a> 
</div>
          
                

              
        <!-- ============bg-se-04  Section  Start============ -->








<!-- Footer -->


<footer id="footer" class="section" style="width: 100%; ">

<footer id="footer" class="section" style="width: 100%;">


  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

 

      <!-- footer nav -->
      <div class="col-12">
        <ul class="footer-nav">
          <li><a href="index.html">Home</a></li>

          <li><a href="about.html">About</a></li>
          <li><a href="course.html">Courses</a></li>

          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <!-- /footer nav -->

    </div>
    <!-- /row -->

    <!-- row -->

    <div id="bottom-footer" class="row" >

    <div id="bottom-footer" class="row">




      <!-- copyright -->
      <div class="col-md-8 col-md-pull-4">
        <div class="footer-copyright">
          <span>&copy; Copyright 2018. All Rights Reserved.  <i class="fa fa-heart-o" aria-hidden="true"></i></span>
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
<!-- /Footer -->








  </body>
</html>










