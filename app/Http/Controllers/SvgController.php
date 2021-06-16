<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gender;
use App\Models\Character_part;
use App\Models\User_Courses;
use App\Models\User;
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

        $character_parts = Character_part::where('gender_id',2)->with('category')->get();
        
        return view("userdashboard.index",[
            'char_parts' => $character_parts,
            'courses' => $courses
        ]);
    }
}
