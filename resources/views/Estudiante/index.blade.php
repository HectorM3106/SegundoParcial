@extends('layout')
@section('title', 'Lista Estudiante')
@section('contenido')

    <h1>Lista Estudiantes</h1>
    <table style="text-align: center" class="table table-bordered table-hover table-responsive-xl">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Codigo Alumno</th>
                <th>Fecha Creación</th>
            </tr>
        </thead>
        <tbody>
    @foreach($estudiante as $estudiantes)
    <tr>
        <td> {{$estudiantes->name}}</td>
        <td>{{$estudiantes->code}}</td>
        <td>{{$estudiantes->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
