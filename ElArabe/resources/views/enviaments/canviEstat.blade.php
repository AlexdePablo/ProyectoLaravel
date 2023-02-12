@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Resta NumVacants de l'Oferta {{$enviament['idEnviaments']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/canviEstatEnviament/{{$enviament['idEnviaments']}}" >
                    <div class="form-group">
                        <label for="cicle"> cicle</label>
                        <br>
                        <select class='form-control' name='Estat'>
                            @foreach (\App\Enums\Estats::traduction() as $estat)
                                <option class="col-md-6" value="{{$estat->value}}" selected="">{{$estat->name}}</option>
                            @endforeach
                        </select>
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
