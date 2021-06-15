<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function instructorlist(){
        $instructors = Instructor::all();
        return view('admin.instructor.index', compact('instructors'));
    }

    public function detail($id)
    {
        $instructors = Instructor::findOrFail($id);
        return view('admin.instructor.detail', compact('instructors'));
    }
}
