@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <div class="container estilo">
        <h4>Nova empresa</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/addEmpresaStore" >
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="adresa"> adresa</label>
                        <input type="text" class="form-control" name="adresa">
                    </div>
                    <div class="form-group">
                        <label for="email"> email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telefon"> telefon</label>
                        <input type="number" class="form-control" name="telefon">
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
