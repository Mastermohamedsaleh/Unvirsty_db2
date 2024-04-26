<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quizze;

use Illuminate\Support\Facades\Auth;

use App\Models\Degree;
use App\Models\AnswerStudent;

class DetailsQuizController extends Controller
{
    
     public function index($quizze_id){
  
    $answerstudent = AnswerStudent::where('quizze_id',$quizze_id)->where('student_id',auth()->user()->id)->get();
    $degree = Degree::where('quizze_id',$quizze_id)->where('student_id',auth()->user()->id)->first();
  
       return view('Student.quizzes.details',compact('answerstudent','degree'));
  
     }
     
}
