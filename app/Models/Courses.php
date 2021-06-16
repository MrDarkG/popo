<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable=[

        "title",
        "description",
        "recomended_age",
        "wallpaper",
        "icon",
        "price",
        
    ];

    public function tasks()
    {
        return $this->hasMany(Course_task::class,"course_id","id")->with(["tasks"]);
    }
    
}
