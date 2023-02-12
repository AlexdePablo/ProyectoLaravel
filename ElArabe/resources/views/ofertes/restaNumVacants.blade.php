@extends('layouts.app')

@section('content')
    <style>
        .estilo{
            font-family: "Comic Sans MS", serif;
        }
    </style>
    <script>
        function jusepe(number) {
            const btncompra = document.getElementById('boton');
            var value = document.getElementById('manolo').value;
            var x = document.getElementById("juanete");
            x.style.display = "none";
            if((number-value)<0){
                btncompra.disabled = true;
                x.innerText = "No pots tenir vacants negatives";
                x.style.display = "block";
            }
            else{

                btncompra.disabled = false;
            }
        }
    </script>
    <div class="container estilo">
        <h4>Resta NumVacants de l'Oferta {{$oferta['idOferta']}}</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="/restaNumVacants/{{$oferta['idOferta']}}" >
                    @csrf
                    <table class="container table table-striped table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre de Vacants Actuals</th>
                        <th>Resta de Vacants</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><center>{{$oferta['NombreVacants']}}</center></td>
                            <td><center><input onchange="jusepe({{$oferta['NombreVacants']}})" id="manolo" type="number" class="form-control @error('NombreVacants') is-invalid @enderror" name="NombreVacants"
                                               value="0" required autocomplete="NombreVacants">
                            @error('NombreVacants')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </center>
                            <div>
                                <p id="juanete" class="text-danger"></p>
                            </div></td>
                        </tr>
                    </tbody>
                    </table>
                    <br>
                    <div class="form-group">
                        <input id="boton" type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
