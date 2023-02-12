<?php

namespace App\Http\Controllers;

use App\Models\Enviament;
use App\Models\Alumne;
use Illuminate\Http\Request;
use function Sodium\add;

class enviamentsOberts extends Controller
{

    public function getAllEnviaments()
    {
        $enviaments = Enviament::paginate(5);
        return view('enviaments.getAllEnviaments', [
            'enviaments' => $enviaments]);
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
        return view('enviaments.canviEstat', [
            'enviament' => $enviament]);
    }

    public function canviEstatEnviament(Request $request, int $id)
    {
        $estat = $request->Estat;
        $Enviament = Enviament::find($id);
        $Enviament -> Estat = $estat;
        $Enviament -> save();
        return redirect('getEnviaments')->with('success-add', 'Estat del enviament canviat correctament');
    }
}
