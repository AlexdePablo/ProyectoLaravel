<?php

namespace App\Http\Controllers;

use App\Models\Enviament;
use App\Models\Alumne;
use Illuminate\Http\Request;
use function Sodium\add;

class enviamentsOberts extends Controller
{

    public function getAllEnviaments(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        //$envasifnasd = ();
        $enviaments = Enviament::all();
        return $enviaments->toJson();
       foreach ($enviaments as $enviament)
        {
            if($enviament['Estat'] == 'Acceptat'){
                $envasifnasd.array_push($envasifnasd, $enviament);
            }

        }

        return view('enviamentsOberts', [
            'envasifnasd' => $envasifnasd]);
    }

    public function ChangeEstat(int $idEnviament, $estat)
    {
        $Enviament = Enviament::find($idEnviament);
        $Enviament -> Estat = $estat;
        $Enviament -> save();
        $enviaments = Enviament::all();
        return view('enviaments.getAllEnviamentsOberts', [
            'envasifnasd' => $enviaments]);
    }

    public function getestatsEdit(int $id)
    {
        //config(['app.idEdit' => $id]);
        $enviament = Enviament::find($id);
        return view('ofertes.canviEstat', [
            'enviament' => $enviament]);
    }

    public function canviEstatEnviament(Request $request, int $id)
    {
        $estat = $request->Estat;
        $Enviament = Enviament::find($id);
        $Enviament -> Estat = $estat;
        $Enviament -> save();
        $enviaments = Enviament::all();
        return view('enviaments.getAllEnviamentsOberts', [
            'envasifnasd' => $enviaments]);
    }
}
