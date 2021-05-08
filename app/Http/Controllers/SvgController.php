<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gender;
use App\Models\Character_part;

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
}
