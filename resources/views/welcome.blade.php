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





<!-- 
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
  </div> -->


<!-- 
  <nav
      class=" navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
     >
      <div class="container-fluid" style="background:#1f60dd;padding:9px; marign-bottom:50px">
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
    </nav> -->
  









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


  <!-- ======= Hero Section ======= -->
  <section id="hero" >

  

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Smart Education For Your Study</h1>
          <h2>Education is a transformative journey that empowers individuals and shapes societies. It is the key to unlocking knowledge</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/images/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



   

 

  <!-- <div class="row">
  
   

   <div class="col">
     sacasckasnlvnkla
   </div> 


   <div class="col">

   <img src="assets/images/undraw_certification_re_ifll.svg" alt="">

   </div>
 

  </div>
 -->



    <!-- navbar -->
    <!-- <nav
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
    </nav> -->

    <!-- carousel -->
   <!-- <div
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
      </div> -->



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


    <!-- our fields -->


    <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Our Fields</h2>
                    </div>
                </div>
</div>
</div>    
    <div class="container mb-5">

      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/12.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/13.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/14.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/15.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>










      



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
              Smart Education: Empowering Minds, Shaping Futures
            </p>

            <p class="fs-4 my-5 txt-gray">
              At  Smart Education, we believe in the transformative power of
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


          <!-- ======= Team Section ======= -->

          <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Team</h2>
                    </div>
                </div>
</div>
</div>   


  <section id="team" class="team section-bg  mt-3">
      <div class="container" data-aos="fade-up">



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



 



<!-- ################# popular Cources Starts Here#######################--->


<div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Featured Courses</h2>
                    </div>
                </div>
</div>
</div>     


<div class="popular-cources pc2">
    <div class="container">
        
        <div class="row courc-ro">
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="   assets/images/course_1.jpg" alt="">
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
                    <img src="   assets/images/course_2.jpg" alt="">
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
                    <img src="   assets/images/course_3.jpg" alt="">
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
    </div>
</div>  




               


<div class="viewall">
<a href="{{url('coursehome')}}" class="button-course">
    <i class="fa-solid fa-arrow-right-long"></i> View More
</a> 
</div>
          
                

              
      

 <!-- ======= Contact Section ======= -->


 

<div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>CONTANCT</h2>
                    </div>
                </div>
</div>
</div>    
 <section id="contact" class="contact mt-5">
      <div class="container" data-aos="fade-up">



        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
              <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
              <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->


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
</html>










