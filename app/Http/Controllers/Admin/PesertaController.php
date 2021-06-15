<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function pesertalist(){
        $pesertas = Peserta::all();
        return view('admin.peserta.index', compact('pesertas'));
    }
}
