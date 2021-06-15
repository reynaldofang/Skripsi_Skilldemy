<?php

namespace App\Http\Controllers\Instructor;

use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Category;

class RegisterController extends Controller
{

    public function showFormRegister(){
        $categories = Category::all();
        return view('instructor.auth.register', compact('categories'));
     }

    public function register(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required',
            'gender'  =>  'required',
            'password'  =>  'required',
            'phone'  =>  'required',
            'about' =>  'required',
            'category_id'   =>  'required',
            'experience'   =>  'required'
        ],  [
            'name.required' =>  'Please enter your name',
            'email.required' =>  'Please enter Email',
            'gender.required'  =>  'Please select a valid Gender',
            'password.required'  =>  'Please enter your Password',
            'phone.required'  =>  'Please enter your Phone',
            'about.required' =>  'Please enter your about',
            'category_id.required'   =>  'Please select a valid category',
            'experience.required'   =>  'Please enter Experience'
        ]);

        $instructors = new Instructor([
            'name'                  =>  $request->name,
            'email'                 =>  $request->email,
            'gender'                =>  $request->gender,
            'password'              =>  Hash::make($request->password),
            'phone'                 =>  $request->phone,
            'about'                 =>  $request->about,
            'category_id'   =>  $request->category_id,
            'experience'            =>  $request->experience
        ]);

        $instructors->save();
        return redirect()->route('instructor.login');
    }

}
