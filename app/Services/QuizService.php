<?php
namespace App\Services;

use Auth;
use App\Models\Answers;
use DB;
class QuizService 
{
	static public function checkIfAnswerIsCorrect($id)
	{
		return Answers::where("id",$id)->firstOrFail();

	}
}