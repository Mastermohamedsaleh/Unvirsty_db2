<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quizze;
use App\Models\Degree;
use Illuminate\Support\Facades\Auth;


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
        //
    }


    public function show($quizze_id)
    {
       $student_id = Auth::guard('student')->user()->id;
       return view('Student.quizzes.show',compact('quizze_id','student_id'));        
    }


    public function edit($id)
    {
        //
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
