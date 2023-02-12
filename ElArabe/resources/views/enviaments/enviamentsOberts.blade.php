@extends('layouts.app')
@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <table class="container estilo table table-striped table-responsive table-bordered">
        <thead>
        <tr>
            <th>Nom Empresa</th>
            <th>Adreça</th>
            <th>Telèfon</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($envasifnasd as $enviament)
            <tr>
                <td><center>{{$enviament['Estat']}}</center></td>
                <td><center>{{$enviament['Observacions']}}</center></td>
                <td><center>{{$enviament['idOferta']}}</center></td>
                <td><center>{{$enviament['idAlumne']}}</center></td></tr>
        @endforeach
        </tbody>
    </table>

@endsection
