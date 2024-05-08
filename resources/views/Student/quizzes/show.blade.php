@include('header')
  <div class="wrapper">


      <div class="main">
@include('nav')






  <div class="container">

 
  <form method="POST" action="{{route('student_quiz.store')}}">
                        @csrf


         <input type="hidden" name="quizze_id" value="{{$Quizzes->id}}">
         <input type="hidden" name="course_id" value="{{$Quizzes->course_id}}">

                        @foreach($questions as $question)
        <div class="card mt-3">
  
      
            <!-- <div class="card @if(!$loop->last)mb-3 @endif"> -->
                             
    
        
           
      


   
        <div class="card-body">

        <h4 class="text-primary"> {{ $question->title }}</h4>
            


        <input type="hidden" name="questions[{{ $question->id }}]" value="">
             @foreach($question->questionOptions as $option)
             <div class="form-check">
              <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
              <label class="form-check-label" for="option-{{ $option->id }}">
                  {{ $option->option_text }}
              </label>
            </div>
@endforeach



        </div>


        </div>

        @endforeach

        <div class="form-group row mb-0 mt-2">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button>
                            </div>


</form>


  </div>





 









  @include('footer')