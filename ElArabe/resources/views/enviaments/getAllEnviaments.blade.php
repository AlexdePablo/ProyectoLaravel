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
                <label for="grup" class='col-md-4 float-start col-form-label text-md-end control-label'>Enviaments<span
                        class="text-danger"></span></label>
                <div class="float-end col-auto my-1">
                    <a href="addEmpresa" class="btn btn-primary">Nou Enviament</a>
                </div>
            </div>
            @if(session('success-edit'))
                <div class="form-group alert  alert-success" role="success-edit">
                    {{session('success-edit')}}
                </div>
            @endif
            @if(session('success-add'))
                <div class="form-group alert  alert-success" role="success-add">
                    {{session('success-add')}}
                </div>
            @endif
        </div>
    </div>
    <table class="estilo container table table-striped table-responsive table-bordered">
        <thead>
        <tr>
            <th><center>Identificador Oferta</center></th>
            <th><center>Alumne</center></th>
            <th><center>Observacions</center></th>
            <th><center>Estat</center></th>
            <th><center>Edita l'estat</center></th>
        </tr>
        </thead>
        <tbody>
        @foreach($enviaments as $enviament)
            <tr>
                <td><center>{{$enviament['idOferta']}}</center></td>
                @foreach($alumnes as $alumne)
                    @if($alumne['idAlumne'] == $enviament['idAlumne'])
                        <td><center>{{$alumne['name']}}</center></td>
                    @endif
                @endforeach
                <td><center>{{$enviament['Observacions']}}</center></td>
                <td><center>{{$enviament['Estat']}}</center></td>
                <td><center><a  href="/enviaments/editarEstat/{{$enviament['idEnviaments']}}"  class="btn btn-primary">Edita l'enviament</a></center></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $enviaments->links() !!}
    </div>
@endsection

