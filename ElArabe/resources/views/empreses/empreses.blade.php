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
                <label for="grup" class='col-md-4 float-start col-form-label text-md-end control-label'>Empreses<span
                        class="text-danger"></span></label>
                <div class="float-end col-auto my-1">
                    <a href="addEmpresa" class="btn btn-primary">Nueva Empresa</a>
                </div>
            </div>
        </div>
    </div>
    <table class="estilo container table table-striped table-responsive table-bordered">
        <thead>
        <tr>
            <th><center>Nom</center></th>
            <th><center>Adreça</center></th>
            <th><center>Telèfon</center></th>
            <th><center>Email</center></th>
            <th><center>Editar l'empresa</center></th>
        </tr>
        </thead>
        <tbody>
        @foreach($empreses as $empresa)
                <tr>
                    <td><center>{{$empresa['name']}}</center></td>
                    <td><center>{{$empresa['adresa']}}</center></td>
                    <td><center>{{$empresa['telefon']}}</center></td>
                    <td><center>{{$empresa['email']}}</center></td>
                    <td><center><a  href="empreses/edit/{{$empresa['idEmpresa']}}"  class="btn btn-primary">Edita l'empresa</a></center></td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
