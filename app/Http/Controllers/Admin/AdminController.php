<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;

class AdminController extends Controller
{
    public function adminPanel() {

        return view('layouts.master');
    }
    public function subjects()
    {
        $categories=Category::get();

        return view('admin.subjects.add',[
            'categories'=>$categories,
        ]);
    }
    public function addSubjects(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required'
        ]);

        $image_direction = '/images/'.uniqid().time().'.jpg';
        $data = substr($request->image, strpos($request->image, ',') + 1);
        $image = base64_decode($data);

        Storage::disk('subjects')->put($image_direction, $image);

        return Category::create([
            'title'=>$request['title'],
            'icons'=>'/subjects/'.$image_direction
        ]);
    }
    public function editSubjects(Request $request)
    {
        $categories=Category::where('id', $request->category_id)->update([
            'title' => $request->title,
        ]);

    }
    public function deleteSubjects(Request $request)
    {
        Category::where('id', $request->category_id)->delete();
    }
}
