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
          <li><a class="nav-link   scrollto" href="{{url('fields')}}">Fields</a></li>
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
                                <p>A more interactive and collaborative way of learning has been introduced that has so many benefits. It is beneficial for doctors and students since doctors get an entire platform to pick information from and teach instead of just being restricted to a book. Students get to pay more attention in class and find studying fun..</p>
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


<!-- ============bg-se-06  Section  Start============ -->






 <!-- ################# Our Instructors Starts Here#######################--->    

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
        <li><i class="fa-solid fa-angle-right"></i> <a href="{{url('/')}}">Home</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="{{url('about')}}">About us</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="{{url('coursehome')}}">Courses</a></li>
          <li><i class="fa-solid fa-angle-right"></i> <a href="{{url('fields')}}">Fields</a></li>
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






  </body>