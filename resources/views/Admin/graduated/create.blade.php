@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')



                @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

<h3 class="text-center text-primary">Add Graduated Students</h3>



<div class="card">

<div class="card-body">

<form action="{{route('graduated.store')}}" method="post">

@csrf
   <div class="container mt-4">

   <div class="row">


   <h4 class=" mt-4">Add Graduated</h4>


   <div class="col-4">


<div class="form-group">

<label>College: <span class="text-danger">*</span> </label>
<select name="college_id" >
        <option value="" >Choose College</option>
            @foreach($colleges as $college) 
          
        <option value="{{$college->id}}" >{{$college->name}}</option>
      
            @endforeach
 </select>


 @error('college_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
</div>

</div> 




   <div class="col-4">
   <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id">
    <option value="" disabled>Choose Classroom</option>
       
 </select>

 
 @error('classroom_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

</div> 

   <!-- end one col -->
   </div>

   <div class="col-4">
  


<div class="form-group">

<label>Section:  </label>
<select name="section_id" >
        <option value="" disabled>Choose Sections</option>
 
 </select>

 @error('section_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

</div> 


   <!-- end one col -->
   </div>


</div>

</div>
<button type="submit" class="btn btn-primary m-4" >Submit</button>

</form>


</div>
</div>











 @include('footer')

