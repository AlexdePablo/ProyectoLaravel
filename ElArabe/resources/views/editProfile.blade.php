@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Edita el perfil de {{$user['name']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/editProfile" >
                    <div class="form-group">
                        <label for="name"> name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email"> email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password"> password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="grup"> grup</label>
                        <select class='form-control' name='grup'>
                            <option class="col-md-6" type="text" value="A" selected="">A</option>
                            <option class="col-md-6" type="text" value="B" selected="">B</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Coordinador"> Coordinador</label>
                        <select class='form-control' name='Coordinador'>
                            <option class="col-md-6" type="text" value="0" selected="">No</option>
                            <option class="col-md-6" type="text" value="1" selected="">Sí</option>
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
