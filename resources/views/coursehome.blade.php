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

              <!-- ============abt-01 Section  Start============ -->

              <section class="abt-01">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-wrapper">
                                <h3>Course</h3>
                                <ol>
                                    <li>Home<i class="fa-solid fa-angles-right"></i></li>
                                    <li>Course</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- ============abt-02 Section  Start============ -->







            <!-- ################# popular Cources Starts Here#######################--->
<div class="popular-cources pc2">
    <div class="container">
        
        <div class="row courc-ro">
        <?php $courses = App\Models\Course::paginate(6); ?>
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
</div>  



{{ $courses->links() }}

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