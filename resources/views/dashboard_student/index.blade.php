  
 @include('header')
  <div class="wrapper">
    @include('sidebar_student')

    <div class="main">
 @include('nav')
 


 
 <meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


        <!-- main -->




        <div class="container mt-3">

        <div class="row">



        <div class="col-lg-6 col-sm-6">
        <div class="card-box bg-blue">
    <div class="inner">
        <h3> {{ App\Models\Lecture::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)->count()  }} </h3>
        <p>  Lecture </p>
    </div>
    <a href="{{route('lecturestudent')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
        </div>

        <div class="col-lg-6 col-sm-6">
        <div class="card-box bg-blue">
    <div class="inner">
        <h3> {{ App\Models\Quizze::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)->count() }} </h3>
        <p>  Quizzes </p>
    </div>
    <a href="{{url('student_quiz')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

        </div>


<!-- end row -->
        </div>

<!-- end contienr -->

        </div>





       
<div class="container">
<div id="calendar"></div>

</div>
  





      </div>
    </div>


    <script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calender-student',
        selectable:true,
        selectHelper: true,
        
    });

});
  
</script>



 @include('footer')
