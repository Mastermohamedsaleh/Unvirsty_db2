<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quizze;
use App\Models\Degree;
use App\Models\Question;
use App\Models\Option;
use App\Models\AnswerStudent;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Session;



class QuizController extends Controller
{

    public function index()
    {
        $quizzes = Quizze::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',    Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->orderBy('id', 'DESC')
        ->get();


    


        $student_id = Auth::guard('student')->user()->id;
     return view('Student.quizzes.index', compact('quizzes','student_id'));
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
     


        $quiz = Quizze::where('id',$request->quizze_id)->first();  
        $mytime = Carbon::now('Africa/Cairo')->addHours(1);
        $mytime = $mytime->toDateTimeString();
        $start_time = $quiz->start_time;
        $end_time = $quiz->end_time;
 

         

        if($mytime <= $end_time){ 

        


        $options = Option::find(array_values($request->input('questions')));
   
        $score = 0;
        for($i= 0 ; $i < count($options) ; $i++){
            if(strcmp(trim($options[$i]->option_text), trim($options[$i]->question->right_answer)) === 0 ){
                $score += $options[$i]->question->score;
            }else{
                $score += 0;
            }
            $answerstudent = new AnswerStudent();
            $answerstudent->quizze_id = $request->quizze_id;
            $answerstudent->student_id = Auth::guard('student')->user()->id;
            $answerstudent->answer = $options[$i]->option_text;
            $answerstudent->question_id = $options[$i]->question->id;
            $answerstudent->right_answer = $options[$i]->question->right_answer;
            $answerstudent->save();
        }
     


        $degree = new Degree();
        $degree->quizze_id = $request->quizze_id;
        $degree->student_id = Auth::guard('student')->user()->id;
   
        $degree->course_id = $request->course_id;
        $degree->score = $score;
        $degree->date = date('Y-m-d');
        $degree->save();
    }
        Session::flash('message','تم إجراء الاختبار بنجاح');
        return redirect()->route('student_quiz.index');

     

    

    }


    public function show($quizze_id)
    {


        $quizze = Quizze::where('id',$quizze_id)->where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',    Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->first();
   if($quizze){
       $student_id = Auth::guard('student')->user()->id;
       $Quizzes = Quizze::where('id',$quizze_id)->first();
       $questions = Question::where('quizze_id',$quizze_id)->get();
    //    $options = Option::where('question_id',$)->get();
       return view('Student.quizzes.show',compact('Quizzes','student_id','questions'));        
     }else{
      return redirect()->back();
   }
  }
    



    public function edit($id)
    {


    }

  
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
