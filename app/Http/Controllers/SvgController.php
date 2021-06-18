<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gender;
use App\Models\Category;
use App\Models\Character_part;
use App\Models\User_Courses;
use App\Models\Courses;
use App\Models\User;
use App\Models\Kids;
use App\Models\User_answer;
use App\Models\Age;
use App\Services\UserServices;
use App\Services\QuizService;
use App\Http\Requests\StoreKidsRequest;
use App\Http\Requests\BuyCourseRequest;
use Auth;

class SvgController extends Controller
{
    public function index()
    {
    	$character_parts = Character_part::where('gender_id',2)->with('category')->get();
    	// $category_parts = Part_category::all();

    	return view('test.svg',[
    		'char_parts' => $character_parts,
    	]);
    }
    public function userArea()
    {
        $courses=User::with(["courses"])->where("id",Auth::user()->id)->first();
        $age=Age::get();
        $character_parts = Character_part::where('gender_id',2)->with('category')->get();
        $cat=Category::get();
        return view("userdashboard.index",[
            'char_parts' => $character_parts,
            'courses' => $courses,
            "cats"=>$cat,
            "ages"=>$age,
        ]);
    }
    public function storekidsdata(StoreKidsRequest $request)
    {   
        
        Kids::create([
            "hobbie"=>$request->input("hobbie"),
            "gender"=>$request->input("gender"),
            "age"=>$request->input("age"),
            "user_id"=>\Auth::user()->id
        ]);
        return back();

    }
    public function offers()
    {
        $offers=UserServices::recomendedCourses();
        return view("userdashboard.offers",["offers"=>$offers]);
    }

    public function storecourse(BuyCourseRequest $request)
    {
        UserServices::buyCourse($request->input("course_id"));
        return redirect()->route("user_index");
    }
    public function StoreAnswer(Request $request)
    {
        $this->validate($request,[
            "answer_id"=>"required|integer"
        ]);
        User_answer::create([
            "user_id"=>Auth::user()->id,
            "answer_id"=>$request->input("answer_id")
        ]);
        return QuizService::checkIfAnswerIsCorrect();
    }
}
