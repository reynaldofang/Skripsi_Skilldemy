<?php

namespace App\Http\Controllers\Instructor;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListClass;
use App\Models\Instructor;
use App\Models\Category;

class ListClassController extends Controller
{
    public function createClass(){
        $listclasses = ListClass::all();
        $categories = Category::all();
        return view('instructor.class.create', compact('listclasses', 'categories'));
    }

    public function addClass(Request $request){
        $request->validate([
            'name'  =>  'required',
            'date'  =>  'required',
            'about' =>  'required',
            'location'  =>  'required',
            'category_id'  =>  'required',
            'price' =>  'required',
            'qty'   =>  'required'
        ],  [
            'name.required' =>  'Please input your Name',
            'category_id.required'  =>  'Please select a valid Category',
            'date.required'  =>  'Choose your date',
            'about.required'    =>  'Please input your about',
            'location.required'  =>  'Please input your Location',
            'price.required' =>  'Please input your Price',
            'qty.required'   =>  'Please input your Quantity'
        ]);

        $listclasses = new ListClass([
            'name'          =>  $request->name,
            'instructor_id' =>  Auth::id(),
            'category_id'   =>  $request->category_id,
            'date'          =>  $request->date,
            'about'         =>  $request->about,
            'location'      =>  $request->location,
            'price'         =>  $request->price,
            'qty'           =>  $request->qty,
            'active'        =>  $request->active ? 1 : 0
        ]);
        $listclasses->save();
        return redirect()->route('instructor.class.list')->with('status', 'List Class Added!');
    }
        public function listClass(){
            $listclasses = ListClass::all();
            return view('instructor.class.index', compact('listclasses'));
        }
}
