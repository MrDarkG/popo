<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $fillable=[
        "question_id",
        "is_correct",
        "answer",
        "description",
        "timedelay"
    ];
    public function user_answers()
    {
        return $this->hasOne(User_answer::class,"answer_id");
    }
    public function point()
    {
        return $this->hasOne(Question::class,"id","question_id");
    }
}
