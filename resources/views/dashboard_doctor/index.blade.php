
  
  
  
     @include('header')
  <div class="wrapper">
    @include('sidebar_doctor')



      <div class="main">
 @include('nav')

        <!-- main -->



<div class="container mt-3">

        <div class="row">



        <div class="col-lg-6 col-sm-6">

<div class="card-box bg-blue">
    <div class="inner">
        <h3> {{\App\Models\Lecture::where('doctor_id',auth()->user()->id)->count()}} </h3>
        <p>  Lecture </p>
    </div>
    <a href="{{route('lecture.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

</div>

        <div class="col-lg-6 col-sm-6">

<div class="card-box bg-blue">
    <div class="inner">
        <h3>{{\App\Models\Quizze::where('doctor_id',auth()->user()->id)->count()}} </h3>
        <p>  Quizze </p>
    </div>
    <a href="{{route('quizzes.index')}}"class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
</div>

</div>

        
</div>



</div>


          
      </div>
    </div>
 @include('footer')
