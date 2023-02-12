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
            </div>
            <div>
                <ul class="list-group">
                    @foreach($alumnos as $alumne)
                        <li class="list-group-item"><strong>Nom Empresa:</strong> {{$alumne['name']}}
                            <strong>Adreça:</strong> {{$alumne['lastName']}}
                            <strong>Telèfon:</strong> {{$alumne['DNI']}}
                            <strong>Email:</strong> {{$alumne['curs']}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
