@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')






<div class="container">






<div class="container mt-5">
<div class="row">

<?php $i = 1 ;  ?>
@foreach($courses as $course)



<div class="col-lg-6 col-sm-6">

<div class="card-box bg-blue">
    <div class="inner">
        <h3> {{$course->name}} </h3>
        <p>  course </p>
    </div>
    <a href="{{route('viewstudentincourse',$course->id)}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

            
 


    @endforeach


</div>
</div>





</div>









@include('footer')
