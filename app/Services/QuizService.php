<?php
namespace App\Services;

use Auth;
use App\Models\Answers;
use DB;
use App\Models\Category;
use App\Models\User_Courses;

class QuizService 
{
	static public function checkIfAnswerIsCorrect($id)
	{
		return Answers::where("id",$id)->firstOrFail();

	}
	static public function mycourses()
	{
		return User_Courses::with(["courses"])->where("user_id",Auth::user()->id)->get();
	}
	static public function score($id)
	{
		return Courses::get();
	}
}