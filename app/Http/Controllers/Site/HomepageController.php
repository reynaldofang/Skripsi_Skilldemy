<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListClass;
use App\Models\Category;


class HomepageController extends Controller
{
    public function getListClass(){
        $listclasses = ListClass::all();
        return view('index', compact('listclasses'));
    }

    public function show(){
        $listclasses = ListClass::where('active', 1)->paginate(8);
        $categories = Category::all();
        return view('site.pages.homepage', compact('listclasses','categories'));
    }
}
