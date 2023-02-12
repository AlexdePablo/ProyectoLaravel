@extends('layouts.app')
@section('content')
    <style>
        .estilo {
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <div class='form-group row mb-3'>
            <div class="mb-xxl-5">
                <label for="grup" class='col-md-4 float-start col-form-label text-md-end control-label'>Alumnes<span
                        class="text-danger"></span></label>
                <div class="float-end col-auto my-1">
                    <a href="addAlumne" class="btn btn-primary">Nou Alumne</a>
                </div>
            </div>
        </div>
    </div>
    <table class="container table table-striped table-responsive table-bordered">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Cognom</th>
            <th>DNI</th>
            <th>Curs</th>
            <th>Cicle</th>
            <th>Grup</th>
            <th>Telèfon</th>
            <th>Email</th>
            <th>Tutor</th>
            <th>Fent pràctiques</th>
            <th>Currículum</th>
            <th>Editar alumne</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnes as $alumne)
            <tr>
                <td><center>{{$alumne['name']}}</center></td>
                <td><center>{{$alumne['lastName']}}</center></td>
                <td><center>{{$alumne['DNI']}}</center></td>
                <td><center>{{$alumne['curs']}}</center></td>
                @foreach(\App\Enums\Cicles::cases() as $cicle)
                    @if($cicle->value == $alumne['cicle'])
                        <td><center>{{$cicle->name}}</center></td>
                    @endif
                @endforeach
                <td><center>{{$alumne['grup']}}</center></td>
                <td><center>{{$alumne['telefon']}}</center></td>
                <td><center>{{$alumne['email']}}</center></td>
                @foreach($tutors as $tutor)
                    @if($tutor['idUsuari'] == $alumne['idTutor'])
                        <td><center>{{$tutor->name}}</center></td>
                    @endif
                @endforeach
                @foreach(\App\Enums\Practiques::cases() as $practica)
                    @if($practica->value == $alumne['fent_practiques'])
                        <td><center>{{$practica->name}}</center></td>
                    @endif
                @endforeach
                <td><center>{{$alumne['ruta']}}</center></td>
                <td><center><a  href="alumnes/edit/{{$alumne['idAlumne']}}"  class="btn btn-primary">Edita l'alumne</a></center></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
