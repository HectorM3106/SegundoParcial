<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use Illuminate\Support\Facades\DB;


class EstudianteController extends Controller
{
    //
    public function index()
    {
        $estudiante = DB::table('Estudiante')
        ->select('*')
        ->where('State','=','1')
        ->paginate(5);
        return view('Estudiante/index',compact('estudiante'));
    }
    public function create()
    {
        return view('Estudiante.create');
    }
    //acción de almacenar nuevo registro
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'code' =>'required',
            'name' => 'required',
        ]);
        $estudiante = new Student();
        $estudiante->name = $request->name;
        $estudiante->code = $request->code;
        // dd($estudiante);
        $estudiante->save();
        return redirect()->route('estudiante.index', $estudiante);
    }
}
