
   <style>
        .panel {display: none;}
    </style>


    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ URL::asset('Styles/sidemenu-responsive-tabs') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{URL::asset('Styles/welcome.css')}}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>



      <script
        src="https://kit.fontawesome.com/c1ef89d5e0.js"
        crossorigin="anonymous"
        defer
      ></script>


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







  


      <section class="vh-100" style="background-color:#002db3">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;  padding:50px">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ URL::asset('assets/images/undraw_mobile_login_re_9ntv.svg') }}" style="height: 100%;"
                  alt="login form" class="img-fluid animated" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                

                    


  
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color:#0062cc;"></i>
                      <span class="h1 fw-bold mb-0">Login</span>
                    </div>     
                    <!-- <a href="{{URL('/')}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-arrow-left"></i> Back Home</a> -->
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Select User</label>
                    <select class="form-control" id="sectionChooser">
                        <option value="" selected disabled>Choose list</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="student">Student</option>
                    </select>
                  </div>

                  <div class="main-signup-header">
                                         
                                            @if ($errors->any())
                                                <div class="alert alert-danger mt-3">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
</div>
  
         

                                            {{--form admin--}}
                                            <div class="panel" id="admin">
                                                <h2> Enter  as Admin</h2>
                                                <form method="POST" action="{{route('admin.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>
                                                  
                                            </div>
                                            </form>

                                   
                                         
                                            {{--form Doctor--}}
                                            <div class="panel" id="doctor">
                                                <h2>Enter  as Doctor</h2>
                                                <form method="POST" action="{{route('doctor.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>

                                                </form>

                                            </div>


                                            {{--form user--}}
                  <div class="panel" id="student">
                                                <h2> Enter  as Student</h2>
                                                <form method="POST" action="{{route('student.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>
                                                  
                                            </div>
                                            </form> 





                                            


  
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







                                      


   
                                            





    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>

