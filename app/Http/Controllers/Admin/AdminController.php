<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPanel() {

        return view('layouts.master');
    }
    public function subjects()
    {
        return view('admin.subjects.add');
    }
}
