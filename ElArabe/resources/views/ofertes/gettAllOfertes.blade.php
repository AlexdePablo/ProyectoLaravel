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
                <label for="grup" class='col-md-4 float-start col-form-label text-md-end control-label'>Ofertes<span
                        class="text-danger"></span></label>
                <div class="float-end col-auto my-1">
                    <a href="addOferta" class="btn btn-primary">Nova Oferta</a>
                </div>
            </div>
        </div>
    </div>
    <table class="container table table-striped table-responsive table-bordered">
        <thead>
        <tr>
            <th>Descripció</th>
            <th>Nombre Vacants</th>
            <th>Curs</th>
            <th>Nom Contacte</th>
            <th>Cognoms Contacte</th>
            <th>Email Contacte</th>
            <th>Estudis</th>
            <th>Empresa</th>
            <th>Edita l'oferta</th>
            <th>Resta nombre de vacants</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ofertes as $oferta)
            <tr>
                <td><center>{{$oferta['Descripció']}}</center></td>
                <td><center>{{$oferta['NombreVacants']}}</center></td>
                <td><center>{{$oferta['Curs']}}</center></td>
                <td><center>{{$oferta['NomContacte']}}</center></td>
                <td><center>{{$oferta['CognomsContacte']}}</center></td>
                <td><center>{{$oferta['EmailContacte']}}</center></td>
                @foreach(\App\Enums\Cicles::cases() as $cicle)
                    @if($cicle->value == $oferta['idEstudis'])
                        <td><center>{{$cicle->name}}</center></td>
                    @endif
                @endforeach
                @foreach($empreses as $empresa)
                    @if($empresa['idEmpresa'] == $oferta['idEmpresa'])
                        <td><center>{{$empresa->name}}</center></td>
                    @endif
                @endforeach
                <td><center><a href="empresa/ofertes/edit/{{$oferta['idOferta']}}"  class="btn btn-primary">Edita l'oferta</a></center></td>
                <td><center><a href="ofertes/restaNumVacants/{{$oferta['idOferta']}}"  class="btn btn-primary">Resta NumVacants</a></center></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
