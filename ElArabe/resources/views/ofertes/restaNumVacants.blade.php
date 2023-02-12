@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Resta NumVacants de l'Oferta {{$oferta['idOferta']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/restaNumVacants/{{$oferta['idOferta']}}" >
                    <div class="form-group">
                        <label for="NombreVacants"> NombreVacants</label>
                        <input type="number" class="form-control" name="NombreVacants">
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
