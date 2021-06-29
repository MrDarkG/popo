<?php
namespace App\Services;

use Auth;
use App\Models\Answers;
use DB;
use App\Models\Category;
use App\Models\Course_task;
use App\Models\User_Courses;
use App\Models\Question;
use App\Models\Courses;
use App\Models\User_answer;

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
	static public function answerpoint($id)
	{
		return 5;
	}
	static public function score($id)
	{
		$task_ids=Course_task::where("course_id",$id)->pluck("task_id");
		$questions=Question::whereIn("task_id",$task_ids);
		$max_score=$questions->sum("point");
		$question_ids=$questions->pluck("id");
		$answers=Answers::whereIn("question_id",$question_ids)->where("is_correct",1)->pluck("id");
		$user_answer=User_answer::where("user_id",Auth::user()->id)->pluck("answer_id")->toArray();
		$myscore=0;
		foreach ($answers as $value) {
			if(in_array($value,$user_answer)){
				$myscore+=self::answerpoint($value);
			}
		}
		return ["myscore"=>$myscore,"max_score"=>$max_score];

	}
}