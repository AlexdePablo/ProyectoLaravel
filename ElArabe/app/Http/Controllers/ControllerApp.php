<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class ControllerApp extends Controller
{

    public function addEmpresa($nom, $adresa, $telefon, $email){
        $empresa = new Empresa();
        $empresa->name=$nom;
        $empresa->adresa=$adresa;
        $empresa->telefon=$telefon;
        $empresa->email=$email;
        $empresa->save();
    }
    public function getAllEmpresas(){
        $empresa = Empresa::all();
        return $empresa->toJson();
    }
    public function addOferta($empresa, ){

    }
}
