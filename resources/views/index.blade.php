
  
  
  
     @include('header')
  <div class="wrapper">
    @include('sidebar')
      <div class="main">
 @include('nav') 

 <meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

        <!-- main -->



<div class="container mt-3">

  <?php  
    $namecollege = \App\Models\College::where('id',auth()->user()->college_id)->first();     
  ?>
     <h2 class="text-primary text-center"><?php
       if($namecollege){
        echo $namecollege->name;
       }
   ?></h2>
      
       @if(auth()->user()->status == 0)



       <div class="container">

        <div class="row">



        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-blue">
    <div class="inner">
        <h3> {{\App\Models\College::count()}} </h3>
        <p>  College </p>
    </div>
    <a href="{{route('colleges.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

</div>

        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-green">
    <div class="inner">
        <h3>{{\App\Models\Classroom::count()}} </h3>
        <p>  Classroom </p>
    </div>
    <a href="{{route('classrooms.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-orange">
    <div class="inner">
        <h3>{{\App\Models\Section::count()}} </h3>
        <p>  Section </p>
    </div>
    <a href="{{route('sections.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-blue">
    <div class="inner">
        <h3>{{\App\Models\Student::count()}} </h3>
        <p>  Student </p>
    </div>
    <a href="{{route('students.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-green">
    <div class="inner">
        <h3>{{\App\Models\Doctor::count()}} </h3>
        <p>  Doctor </p>
    </div>
    <a href="{{route('doctors.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

        <div class="col-lg-4 col-sm-6">

<div class="card-box bg-orange">
    <div class="inner">
        <h3>{{\App\Models\Course::count()}} </h3>
        <p>  Course </p>
    </div>
    <a href="{{route('course.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>




          
      </div>
    </div>







          
      </div>






      </div>
    </div>



      
@else 



<div class="container">

<div class="row">



<div class="col-lg-4 col-sm-6">

<div class="card-box bg-blue">
<div class="inner">
<h3> {{\App\Models\Student::where('college_id',auth()->user()->college_id)->count()}} </h3>
<p>  Students </p>
</div>
<a href="{{route('students.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

</div>

<div class="col-lg-4 col-sm-6">

<div class="card-box bg-green">
<div class="inner">
<h3>{{\App\Models\Doctor::where('college_id',auth()->user()->college_id)->count()}} </h3>
<p>  Doctors </p>
</div>
<a href="{{route('classrooms.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-4 col-sm-6">

<div class="card-box bg-orange">
<div class="inner">
<h3>{{\App\Models\Course::where('college_id',auth()->user()->college_id)->count()}} </h3>
<p>  Course </p>
</div>
<a href="{{route('sections.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>




  
</div>
</div>












@endif






@if(auth()->user()->status == 1)
 
<div id="calendar"></div>


@endif



    <!-- end row -->
    </div>


  

<!-- end contaienr -->
    </div>
   




<script>

$(document).ready(function () {

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
    },
    events:'/full-calender',
    selectable:true,
    selectHelper: true,
    select:function(start, end, allDay)
    {
        var title = prompt('Event Title:');
    

        if(title)
        {
            var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

            var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

            $.ajax({
                url:"/full-calender/action",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    type: 'add'
                },
                success:function(data)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Created Successfully");
                }
            })
        }
    },
    editable:true,
    eventResize: function(event, delta)
    {
        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
        var title = event.title;
        var id = event.id;
        $.ajax({
            url:"/full-calender/action",
            type:"POST",
            data:{
                title: title,
                start: start,
                end: end,
                id: id,
                type: 'update'
            },
            success:function(response)
            {
                calendar.fullCalendar('refetchEvents');
                alert("Event Updated Successfully");
            }
        })
    },
    eventDrop: function(event, delta)
    {
        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
        var title = event.title;
        var id = event.id;
        $.ajax({
            url:"/full-calender/action",
            type:"POST",
            data:{
                title: title,
                start: start,
                end: end,
                id: id,
                type: 'update'
            },
            success:function(response)
            {
                calendar.fullCalendar('refetchEvents');
                alert("Event Updated Successfully");
            }
        })
    },

    eventClick:function(event)
    {
        if(confirm("Are you sure you want to remove it?"))
        {
            var id = event.id;
            $.ajax({
                url:"/full-calender/action",
                type:"POST",
                data:{
                    id:id,
                    type:"delete"
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Deleted Successfully");
                }
            })
        }
    }
});

});

</script>

    
 @include('footer')
