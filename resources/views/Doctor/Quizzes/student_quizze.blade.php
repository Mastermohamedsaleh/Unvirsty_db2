@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')












<div class="container mt-5">


<h3 class="text-primary text-center">Degree Student</h3>




@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif




<div class="card">


<div class="card-body">
                     <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name Student</th>
                                            <th>Degree</th>
                                            <th> Date</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($degrees as $degree)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$degree->student->name}}</td>
                                                <td>{{$degree->score}}</td>
                                                <td>{{$degree->date}}</td>
                                              
                                          
                                            </tr>


                                      
                                            
        
@endforeach 
    </div>

  </div>
</div>



</tbody>
</table>




</div>





</div>


</div>










@include('footer')