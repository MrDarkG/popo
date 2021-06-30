<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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
        $path = $request->file('image')->getRealPath();
        file_put_contents('/path/to/new/file_name', $my_blob);

        Category::create([

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
        $categories=Category::where('id', $request->category_id)->delete();

    }
}
