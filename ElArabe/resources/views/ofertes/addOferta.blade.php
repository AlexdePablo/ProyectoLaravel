@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Nova Oferta</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/addOfertaStore" >
                    <div class="form-group">
                        <label for="Descripció"> Descripció</label>
                        <input type="text" class="form-control" name="Descripció">
                    </div>
                    <div class="form-group">
                        <label for="NombreVacants"> NombreVacants</label>
                        <input type="number" class="form-control" name="NombreVacants">
                    </div>
                    <div class="form-group">
                        <label for="Curs"> Curs</label>
                        <br>
                        <select class='form-control' name='Curs'>
                            @foreach (\App\Enums\Years::cases() as $year)
                                <option class="col-md-6" type="text" value="{{$year}}" selected="">{{$year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NomContacte"> NomContacte</label>
                        <input type="text" class="form-control" name="NomContacte">
                    </div>
                    <div class="form-group">
                        <label for="CognomsContacte"> CognomsContacte</label>
                        <input type="text" class="form-control" name="CognomsContacte">
                    </div>
                    <div class="form-group">
                        <label for="EmailContacte"> EmailContacte</label>
                        <input type="text" class="form-control" name="EmailContacte">
                    </div>
                    <div class="form-group">
                        <label for="idEmpresa">Empresa</label>
                        <select class='form-control' name='idEmpresa'>idTutor
                            @foreach($empreses as $empresa)
                                <option class="col-md-6" type="text" value="{{$empresa->idEmpresa}}">{{$empresa->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idEstudis"> idEstudis</label>
                        <br>
                        <select class='form-control' name='idEstudis'>
                            @foreach (\App\Enums\Cicles::cases() as $cicle)
                                <option class="col-md-6" type="text" value="{{$cicle->value}}">{{$cicle->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection
