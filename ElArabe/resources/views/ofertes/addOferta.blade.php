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
                        <label for="Descripció">{{ __('Descripció') }}</label>
                        <input type="text" class="form-control @error('Descripcio') is-invalid @enderror" name="Descripció"
                               value="{{old('Descripció')}}" required autocomplete="Descripció" autofocus>
                        @error('Descripcio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="NombreVacants">{{ __('Nombre Vacants') }}</label>
                        <input type="number" class="form-control @error('NombreVacants') is-invalid @enderror" name="NombreVacants"
                               value="{{old('NombreVacants')}}" required autocomplete="NombreVacants" autofocus>
                        @error('NombreVacants')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
                        <label for="NomContacte">{{ __('Nom Contacte') }}</label>
                        <input type="text" class="form-control @error('NomContacte') is-invalid @enderror" name="NomContacte"
                               value="{{old('NomContacte')}}" required autocomplete="NomContacte" autofocus>
                        @error('NomContacte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="CognomsContacte">{{ __('Cognoms Contacte') }}</label>
                        <input type="text" class="form-control @error('CognomsContacte') is-invalid @enderror" name="CognomsContacte"
                               value="{{old('CognomsContacte')}}" required autocomplete="CognomsContacte" autofocus>
                        @error('CognomsContacte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="EmailContacte">{{ __('Email Contacte') }}</label>
                        <input type="email" class="form-control @error('EmailContacte') is-invalid @enderror" name="EmailContacte"
                               value="{{old('EmailContacte')}}" required autocomplete="EmailContacte" autofocus>
                        @error('EmailContacte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
