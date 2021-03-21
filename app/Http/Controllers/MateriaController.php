<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    //
    public function index()
    {
        $materias = DB::table('Materia')
        ->select('*')
        ->where('state','=','1')
        ->get();
        return view('Materia/index',compact('materias'));
    }
}
