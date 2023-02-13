@extends('layouts.app')

@section('content')
    <style>
        .estilo {
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Afegir Oferta a l'alumne {{$alumne['name']}} {{$alumne['lastName']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/ofertaAlumne/{{$alumne['idAlumne']}}">
                    @csrf
                    <table class="container table table-striped table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Alumne</th>
                            <th>Ofertes Disponibles:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <center>{{$alumne['name']}} {{$alumne['lastName']}}</center>
                            </td>
                            <td>
                                <select class='form-control' name="idOferta">
                                    @foreach ($ofertes as $oferta)
                                        <option class="col-md-6" type="text" value="{{$oferta->idOferta}}">{{$oferta->Descripció}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="form-group">
                        <input  type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
