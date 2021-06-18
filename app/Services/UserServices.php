<?php
namespace App\Services;

use Auth;
use App\Models\Money;
use App\Models\User;
use App\Models\Kids;
use App\Models\User_Courses;
use App\Models\Courses;
use App\Models\User_answer;
use App\Models\Course_task;


use DB;
class UserServices 
{
	static public function recomendedCourses($value='')
	{
		return Courses::
		whereIn("recomended_age",self::mykidsages())->
		whereIn("category_id",self::mykidsHobbies())->select("title",
        "recomended_age",
        "id",
        "wallpaper",
        "icon",
        "price")->
		addSelect(DB::raw("left(`description`,80) as `description`"))->
		get();
	}

	static public function mykidsages($value='')
	{
		return Kids::where("user_id",Auth::user()->id)->pluck("age");
	}
	static public function mykidsHobbies($value='')
	{
		return Kids::where("user_id",Auth::user()->id)->pluck("age");
	}
	static public function checkMyMoney($value='')
	{
		return Money::where("user_id",Auth::user()->id)->first()->money;
	}
	static public function getCoursePrice($id)
	{
		return Courses::where("id",$id)->firstOrFail()->price;
	}
	static public function buyCourse($id)
	{
		$price=self::getCoursePrice($id);
		$mymoney=self::checkMyMoney();
		Money::where("user_id",Auth::user()->id)->update([
			"money"=>$mymoney-$price
		]);
		User_Courses::create([
			"user_id"=>Auth::user()->id,
        	"course_id"=>$id
		]);
	}
	
	static public function haveibuyacourse($id)
    {
        return User_Courses::where([
        	["user_id",Auth::user()->id],
        	["course_id",$id]
        ])->count();
    }

	static public function myCourses()
	{
		return User::with(["courses"])->where("id",Auth::user()->id)->first();
	}

    static public function calculateStats()
    {
    	$mycourses_id=self::myCourses()->courses->pluck("id");
    	return $task_id=Course_task::whereIn("course_id",$mycourses_id)->pluck("task_id");
    	/*$answers=User_answer::
    	with(["answers"])->
    	where("user_id",Auth::user()->id)->get();
    	return $answers;*/
    	return $mycourses=self::myCourses();
    }
}