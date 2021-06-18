<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_answer extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        "answer_id"
    ];
    public function answers()
    {
        return $this->hasOne(Answers::class,"id","answer_id")->with(["point"]);
       /* return $this->hasManyThrough(
            Answers::class,
            Question::class,
            "id",
            "question_id",
            "answer_id",
            "id"
        );*/
    }
   
}
