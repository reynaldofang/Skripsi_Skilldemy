<?php

namespace App\Http\Controllers\Peserta;

use App\Models\Peserta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('peserta.auth.register');
     }

    public function register(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required',
            'gender'  =>  'required',
            'password'  =>  'required',
            'phone'  =>  'required'
        ],  [
            'name.required' =>  'Nama tidak boleh kosong',
            'email.required' =>  'Please select a valid Instructor',
            'gender.required'  =>  'Pilih Waktu yang diinginkan',
            'password.required'  =>  'Location tidak boleh kosong',
            'phone.required'  =>  'Please select a valid Category'
        ]);

        $pesertas = new Peserta([
            'name'                  =>  $request->name,
            'email'                 =>  $request->email,
            'gender'                =>  $request->gender,
            'password'              =>  Hash::make($request->password),
            'phone'                 =>  $request->phone
        ]);

        $pesertas->save();
        return redirect()->route('peserta.login');
    }
}
