<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_task extends Model
{
    use HasFactory;
    protected $fillable=[

        "course_id",
        "task_id",
    ];
    public function tasks()
    {
        return $this->hasMany(Question::class,"task_id","task_id")->with(["answers:question_id,id,answer,description,timedelay,sound,sound_duration"]);
    }
}
