@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Edita l'Alumne {{$alumne['name']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/editAlumneStore/{{$alumne['idAlumne']}}" >
                    @csrf
                    <div class="form-group">
                        <label for="name">{{__('Nom')}}</label>
                        <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastName">{{__('Cognom')}}</label>
                        <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                        @error('lastName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="DNI">{{__('DNI')}}</label>
                        <input type="text" class="form-control @error('DNI') is-invalid @enderror" name="DNI" value="{{ old('DNI') }}" required autocomplete="DNI" autofocus>

                        @error('DNI')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="curs">Curs</label>
                      <br>
                        <select class='form-control' name='curs'>
                            @foreach (\App\Enums\Years::cases() as $year)
                                <option class="col-md-6" type="text" value="{{$year}}" selected="">{{$year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cicle">Cicle</label>
                        <br>
                        <select class='form-control' name='cicle'>
                            @foreach (\App\Enums\Cicles::cases() as $cicle)
                                <option class="col-md-6" type="text" value="{{$cicle->value}}">{{$cicle->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefon">{{ __('Telèfon') }}</label>
                        <input type="number" class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon" autofocus>

                        @error('telefon')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="idTutor">Tutor</label>
                        <br>
                        <select class='form-control' name='idTutor'>idTutor
                        @foreach($tutors as $tutor)
                            <option class="col-md-6" type="text" value="{{$tutor->idUsuari}}">{{$tutor->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fent_practiques">Fent pràctiques</label>
                        <br>
                        <select class='form-control' name='fent_practiques'>
                            @foreach (\App\Enums\Practiques::cases() as $practiques)
                                <option class="col-md-6" type="text" value="{{$practiques->value}}">{{$practiques->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label   for="ruta">{{ __('Ruta') }}</label>
                        <input type="text" class="form-control @error('ruta') is-invalid @enderror" name="ruta" value="{{ old('ruta') }}" required autocomplete="ruta">

                        @error('ruta')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
