@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Nou Alumne</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/addAlumneStore" >
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Cognom</label>
                        <input type="text" class="form-control" name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="DNI">DNI</label>
                        <input type="text" class="form-control" name="DNI">
                    </div>
                    <div class="form-group">
                        <label for="curs">Curs</label>
                        <br>
                        <select class='form-control' name='curs'>
                            @foreach (\App\Enums\Years::cases() as $year)
                                <option class="col-md-6" type="text" value="{{$year}}" selected="">{{$year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cicle">Cicle</label>
                        <br>
                        <select class='form-control' name='cicle'>
                            @foreach (\App\Enums\Cicles::cases() as $cicle)
                                <option class="col-md-6" type="text" value="{{$cicle->value}}">{{$cicle->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telèfon</label>
                        <input type="number" class="form-control" name="telefon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="idTutor">Tutor</label>
                        <br>
                        <select class='form-control' name='idTutor'>idTutor
                            @foreach($tutors as $tutor)
                                <option class="col-md-6" type="text" value="{{$tutor->idUsuari}}">{{$tutor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fent_practiques">Fent pràctiques</label>
                        <br>
                        <select class='form-control' name='fent_practiques'>
                            @foreach (\App\Enums\Practiques::cases() as $practiques)
                                <option class="col-md-6" type="text" value="{{$practiques->value}}">{{$practiques->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label   for="ruta">Ruta</label>
                        <input type="text" class="form-control" name="ruta">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection
