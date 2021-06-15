<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categorylist(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function categorycreate(){
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function addClass(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'about' =>  'required'

        ],  [
            'name.required' =>  'Nama tidak boleh kosong',
            'about.required' =>  'Please select a valid Instructor',
        ]);

        $categories = new Category([
            'name'          =>  $request->name,
            'about'         =>  $request->about

        ]);

        $categories->save();
        return redirect()->route('admin.category.list')->with('status', 'List Category Added!');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {

        $categories = Category::find($id);
        $categories->name  =   $request->input('name');
        $categories->about  =   $request->input('about');


        if ($request->hasfile('iconImage')) {
            $file = $request->file('iconImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/icons'), $filename);
            $categories->iconImage = $filename;
        }

        if ($request->hasfile('fileimage')) {
            $file = $request->file('fileimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/images'), $filename);
            $categories->fileimage = $filename;
        }

        $categories->save();
        return redirect()->route('admin.category.list')->with('status', 'Edit Category Complete!');
    }
    
    public function detail($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.detail', compact('categories'));
    }
    
    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('admin.category.list')->with('status', 'Category deleted!');
    }

}
