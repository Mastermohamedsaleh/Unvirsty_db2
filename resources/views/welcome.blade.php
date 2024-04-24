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
          <li><a class="nav-link   scrollto" href="#portfolio">Fileds</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
   
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="{{url('login')}}">Login</a></li>
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
            <a href="{{url('login')}}" class="btn-get-started scrollto">Login</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/images/undraw_education_f8ru.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->



   

 

 






      <!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to Smart Education</h2>
							<!-- <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p> -->
						</div>

						<!-- feature -->
						<div class="feature">
              <i class="feature-icon fa-solid fa-flask"></i>
							<div class="feature-content">
								<h4>Online Courses </h4>
								<p>Online courses are a form of e-learning, where educational content is delivered electronically through digital platforms and resources. E-learning allows learners to access courses remotely and study at their own pace .</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Doctors</h4>
								<p>Expert Doctors have mastered their subject matter and possess a deep understanding of the content they teach. They have extensive knowledge and expertise in their field, allowing them to convey complex concepts in a clear and accessible manner.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>Community universities, also known as community colleges or junior colleges, play a crucial role in higher education by offering accessible and affordable educational opportunities to a wide range of students. Here are some words associated.</p>
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



<section class="bg-se-04">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <div class="counting" data-count="20">2002</div>
                    <h5>YEAR OF HISTORY</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div class="counting" data-count="80">{{App\Models\Student::count()}}</div>
                    <h5>STUDENTS</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                    <i class="fa-solid fa-globe"></i>
                    <div class="counting" data-count="27">{{App\Models\Course::count()}}</div>
                    <h5>COURSES</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="_lk_bg_cd">
                <i class="fa-solid fa-person-chalkboard"></i>
                    <div class="counting" data-count="62">{{App\Models\Doctor::count()}}</div>
                    <h5>Doctors</h5>
                </div>
            </div>
        </div>
    </div>
</section>











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
        
          <?php $doctors = App\Models\Doctor::take(4)->get(); ?>
@foreach($doctors as $doctor)
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">



              <div class="pic">
            
              
            @if( $doctor->image_name == 'default.jpg')
    <img src="{{URL::asset('assets/images/default.jpg')}}" alt="SomeThing Wrong" class="img-fluid " >
    @else
    <img src="{{asset('/image/'.$doctor->image_name)}}" alt="" class="img-fluid ">         
    @endif
            </div>
              <div class="member-info">
                <h4>{{$doctor->name}}</h4>
                <span>Teach : {{$doctor->college->name}}</span>
                <p>Nationalitie : {{$doctor->Nationality->nationalitie }} .</p>
             

              </div>
            </div>
          </div>
@endforeach


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
                   
     
                
     
         <i class="fa-solid fa-angles-right" class="txt-pre"></i><span class="txt-bold"> VARITY COURSES</span>   

      
                              <p>Flexibility: Varied courses provide students with the flexibility to choose from a diverse array of subjects. This flexibility allows students to tailor their academic journey to their interests, strengths, and career aspirations.</p>
                      
                                  <i class="fa-solid fa-angles-right" class="txt-pre"></i><span class="txt-bold"> ATTRACTIVE PRICES</span>
                              <p>Affordability: Attractive prices in universities make education more accessible and affordable for a wider range of students. Lower tuition fees can alleviate financial burdens and enable students from diverse backgrounds to pursue higher education.</p>
                    
                                  <i class="fa-solid fa-angles-right" class="txt-pre"></i><span class="txt-bold"> EVENTS</span>
                              <p>Community Building: University events serve as a platform for community building, bringing together students, faculty, staff, and even alumni. They create opportunities for interaction, networking, and forming connections among individuals from diverse backgrounds and disciplines.</p>
                    
                                  <i class="fa-solid fa-angles-right" class="txt-pre"></i><span class="txt-bold"> TALENTE Doctors</span>
                              <p>Subject Matter Expertise: Talented Doctors have a deep understanding of the subjects they teach. They possess extensive knowledge and expertise in their respective fields, allowing them to deliver accurate and comprehensive instruction to their students.</p>
                 
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




<div class="popular-cources pc2">
    <div class="container">
        
        <div class="row courc-ro">



        <?php $courses = App\Models\Course::take(3)->get(); ?>
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="courc-card">
      @if( $course->image_name == 'course_default.jpg')
       <img src="{{URL::asset('assets/images/course_default.jpg')}}" alt="SomeThing Wrong"  >
    @else
    <img src="{{asset('/courses/'.$course->image_name)}}" alt="" >         
    @endif



                    <!-- <img src="assets/images/course_1.jpg" alt=""> -->
                    <div class="cource-det">
                        <h6>{{$course->name}}</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> {{$course->doctor->name}} </li>
                            <li><i class="far fa-calendar-plus"></i>{{$course->college->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach



 


      
        </div>
    </div>
</div>  




              
 <!-- ======= Contact Section ======= -->


 
<?php   $setting = App\Models\Setting::all();     ?>


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
@foreach($setting as $s)
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>{{$s->address}}</p>
              </div>

              <div class="email">
              <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p>{{$s->email}}</p>
              </div>

              <div class="phone">
              <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p>+{{$s->phone}}</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->



 <!-- ======= Footer ======= -->
 <footer id="footer">

	
<div class="footer-top" >
  <div class="container">
    <div class="row">

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
          <a href="{{$s->link_instagram}}" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="{{$s->link_linked_in}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

@endforeach
</footer><!-- End Footer -->


  </body>
</html>










