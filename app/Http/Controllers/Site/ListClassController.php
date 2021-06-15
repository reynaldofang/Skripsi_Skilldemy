<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListClass;
use App\Models\Category;

class ListClassController extends Controller
{

    public function getListClass(){
        $listclasses = ListClass::all();
        return view('index', compact('listclasses'));
    }

    public function show($slug){
        $listclasses = ListClass::where('slug', $slug)->get();
        return view('site.pages.detail', compact('listclasses'));
    }

    public function listClass($slug)
    {
        $listclasses = ListClass::where('active', 1)->paginate(8);
        $categories = Category::where('slug', $slug)->get();
        return view('site.pages.class', compact('listclasses', 'categories'));
    }

}
