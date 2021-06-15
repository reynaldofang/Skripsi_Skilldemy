<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListClass;
use App\Models\Instructor as InstructorModel;
use App\Models\Category;
use App\Models\Admin;

class ListclassController extends Controller
{
    public function classlist(){
        $listclasses = ListClass::all();
        return view('admin.class.index', compact('listclasses'));
    }

    public function createClass(){
        $instructors = InstructorModel::all();
        $categories = Category::all();
        return view('admin.class.create', compact('instructors', 'categories'));
    }

    public function addClass(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'instructor_id' =>  'required',
            'date'  =>  'required',
            'about' =>  'required',
            'location'  =>  'required',
            'category_id'  =>  'required',
            'price' =>  'required',
            'qty'   =>  'required'
        ],  [
            'name.required' =>  'Please input your Name',
            'instructor_id.required' =>  'Please select a valid Instructor',
            'category_id.required'  =>  'Please select a valid Category',
            'date.required'  =>  'Choose your date',
            'about.required'    =>  'Please input your about',
            'location.required'  =>  'Please input your Location',
            'price.required' =>  'Please input your Price',
            'qty.required'   =>  'Please input your Quantity'
        ]);

        $listclasses = new ListClass([
            'name'          =>  $request->name,
            'instructor_id' =>  $request->instructor_id,
            'category_id'   =>  $request->category_id,
            'date'          =>  $request->date,
            'about'         =>  $request->about,
            'location'      =>  $request->location,
            'price'         =>  $request->price,
            'qty'           =>  $request->qty,
            'active'        =>  $request->active ? 1 : 0
        ]);
        $listclasses->save();
        return redirect()->route('listclassindex')->with('status', 'List Class Added!');
    }

    public function edit($id)
    {
        $listclass = ListClass::findOrFail($id);
        $instructors = InstructorModel::all();
        $categories = Category::all();
        return view('admin.class.edit', compact('listclass', 'instructors', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $listclasses = ListClass::find($id);
        $listclasses->name  =   $request->input('name');
        $listclasses->instructor_id  =   $request->input('instructor_id');
        $listclasses->date  =   $request->input('date');
        $listclasses->about =   $request->input('about');
        $listclasses->location  =   $request->input('location');
        $listclasses->category_id  =   $request->input('category_id');
        $listclasses->price  =   $request->input('price');
        $listclasses->qty  =   $request->input('qty');
        $listclasses->active  =   $request->input('active') ? 1 : 0;

        if ($request->hasfile('fileimage')) {
            $file = $request->file('fileimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/images'), $filename);
            $listclasses->fileimage = $filename;
        }

        $listclasses->save();
        return redirect()->route('listclassindex')->with('status', 'Edit Class Complete!');
    }

    public function show($id)
    {
        $listclass = ListClass::findOrFail($id);
        return view('admin.class.show', compact('listclass'));
    }

    public function acceptClass($id)
    {
        $listclasses = Listclass::where('id', $id)->update(['status'=>'accepted', 'employee_id'=>Auth::id()]);
        return redirect()->route('listclassindex');
    }

    public function declineClass($id)
    {
        $listclasses = Listclass::where('id', $id)->update(['status'=>'decline', 'employee_id'=>Auth::id()]);
        return redirect()->route('listclassindex');
    }

    public function canceledClass($id)
    {
        $listclasses = Listclass::where('id', $id)->update(['status'=>'canceled', 'employee_id'=>Auth::id()]);
        return redirect()->route('listclassindex')->with('status', 'Class Canceled!');
    }

    public function delete($id)
    {
        $listclasses = ListClass::find($id);
        $listclasses->delete();
        return redirect()->route('listclassindex')->with('status', 'Class deleted!');
    }
}
