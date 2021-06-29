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
        $total_score=UserServices::calculateStats();

        $courses=UserServices::myCourses();
        $age=Age::get();
        $character_parts = Character_part::where('gender_id',2)->with('category')->get();
        $cat=Category::get();
        return view("userdashboard.index",[
            'char_parts' => $character_parts,
            'courses' => $courses,
            "cats"=>$cat,
            "ages"=>$age,
            "total_score"=>$total_score
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
        return QuizService::checkIfAnswerIsCorrect($request->input("answer_id"));
    }
    public function changeCharacterOutfit(Request $request)
    {
        $this->validate($request,[
            'body_type_name'=>'required', 
            'is_next'=>'required' 
        ]);

        return [
            'id'=>1,
            'content'=>'
                <g id="tma">
                    <path id="XMLID_487_" class="st0" d="M94.1,30.5c-4.4,6.7-12.8,4.3-21.4-1.4c-8.6-5.7-14-12.5-9.6-19.2c4.4-6.7,14.9-7.5,23.5-1.8
                        C95.2,13.8,98.5,23.9,94.1,30.5z"/>
                    <path id="XMLID_485_" class="st0" d="M18.8,60.8C14.5,60,3.3,32.2,24.1,14.3c20.8-18,54.7-7.4,57.9,6c0.9-0.1,7.3-0.5,12.1,9
                        c4.3,8.6,6.9,41.8-11.9,47.6C63.5,82.6,18.8,60.8,18.8,60.8z"/>
                </g>
            '
        ]; 
    }
}
