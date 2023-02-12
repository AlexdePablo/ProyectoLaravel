<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class Empreses extends Controller
{
   public function getAllEmpreses()
   {
       $empreses = Empresa::all();
       //return $enviaments->toJson();

       return view('empreses.empreses', [
           'empreses' => $empreses]);
   }

    public function getUsuari()
    {
        $usuari = auth()->user()->Coordinador;
        return $usuari;
    }

    public function create()
    {
        return view('empreses.addEmpresa');
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->name = $request-> name;
        $empresa->adresa = $request->adresa;
        $empresa->email = $request->email;
        $empresa->telefon = $request->telefon;
        $empresa -> save();
        return redirect('empreses');
    }
    public function editStore(Request $request, int $id)
    {

        $empresa = Empresa::find($id);
        $empresa->name = $request-> name;
        $empresa->adresa = $request->adresa;
        $empresa->email = $request->email;
        $empresa->telefon = $request->telefon;
        $empresa -> save();
        return redirect('empreses');
    }
    public function getDataEdit(int $id)
    {
        //config(['app.idEdit' => $id]);
        $empresa = Empresa::find($id);
        return view('empreses.editEmpresa', [
            'empresa' => $empresa]);
    }


    public function addEmpresa($nom, $adreca, $telefon, $correu){
        $event = new Empresa();
        $event-> name=$nom;
        $event-> adresa=$adreca;
        $event-> telefon=$telefon;
        $event-> email=$correu;
        $event->save();
        $event2 = Empresa::findOrFail($event->idEmpresa);
        return $event2->toJson();
    }

    public function editEmpresa($id, $nom, $adreca, $telefon, $correu){
        $empresa = Empresa::find($id);
        $empresa->name = $nom;
        $empresa->adresa = $adreca;
        $empresa->telefon = $telefon;
        $empresa->email = $correu;
        $empresa->save();
        return redirect('empreses.empreses');
    }



}
