<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

//   protected $fillable = ['student_id','quizze_id','question_id','score','date'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }
    public function quizze()
    {
        return $this->belongsTo('App\Models\Quizze', 'quizze_id');
    }
}
