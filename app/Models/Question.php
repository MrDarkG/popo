<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable=[
        "source",
        "time",
        "point",
        "task_id"
    ];
    public function answers()
    {
        return $this->hasMany(Answers::class,"question_id");
    }

    public function correctanswers()
    {
        return $this->hasOne(Answers::class,"question_id")->where("is_correct",1)->whereHas("user_answers");
    }
}
