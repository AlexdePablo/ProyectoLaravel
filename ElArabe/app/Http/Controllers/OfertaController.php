<?php

namespace App\Http\Controllers;

use App\Models\Alumne;
use App\Models\Empresa;
use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfertaController extends Controller
{
    public function getAllOfertas()
    {   $empreses = Empresa::all();
        $ofertes = Oferta::paginate(5);

        return view('ofertes.gettAllOfertes', [
            'ofertes' => $ofertes, 'empreses' => $empreses]);
    }

    public function editOferta($id, $descripció, $NombreVacants, $Curs, $NomContacte, $CognomsContacte, $EmailContacte)
    {
        $oferta = Oferta::find($id);
        $oferta->Descripció = $descripció;
        $oferta->NombreVacants = $NombreVacants;
        $oferta->Curs = $Curs;
        $oferta->NomContacte = $NomContacte;
        $oferta->CognomsContacte = $CognomsContacte;
        $oferta->EmailContacte = $EmailContacte;
        $oferta->save();
        return $oferta->toJson();
    }

    public function addOferta($idEmpresa, $descripcio, $NombreVacants, $Curs, $NomContacte, $CognomsContacte, $EmailContacte, $idCicle)
    {
        $oferta = new Oferta();
        $oferta->Descripció = $descripcio;
        $oferta->NombreVacants = $NombreVacants;
        $oferta->Curs = $Curs;
        $oferta->NomContacte = $NomContacte;
        $oferta->CognomsContacte = $CognomsContacte;
        $oferta->EmailContacte = $EmailContacte;
        $oferta->idEmpresa = $idEmpresa;
        $oferta->idEstudis = $idCicle;
        $oferta->save();
        return $oferta->toJson();
    }

    public function store(Request $request)
    {
        $oferta = new Oferta();
        $oferta->Descripció = $request-> Descripció;
        $oferta->NombreVacants = $request->NombreVacants;
        $oferta->Curs = $request->Curs;
        $oferta->NomContacte = $request->NomContacte;
        $oferta->CognomsContacte = $request->CognomsContacte;
        $oferta->EmailContacte = $request->EmailContacte;
        $oferta->idEmpresa = $request->idEmpresa;
        $oferta->idEstudis = $request->idEstudis;
        $oferta -> save();
        return redirect('oferta')->with('success-add', 'Oferta afegida correctament');
    }
    public function editStore(Request $request, int $id)
    {
        $oferta = Oferta::find($id);
        $oferta->Descripció = $request-> Descripció;
        $oferta->NombreVacants = $request->NombreVacants;
        $oferta->Curs = $request->Curs;
        $oferta->NomContacte = $request->NomContacte;
        $oferta->CognomsContacte = $request->CognomsContacte;
        $oferta->EmailContacte = $request->EmailContacte;
        $oferta->idEmpresa = $request->idEmpresa;
        $oferta->idEstudis = $request->idEstudis;
        $oferta -> save();
        return redirect('oferta')->with('success-edit', 'Oferta editada correctament');
    }
    public function getDataEdit(int $id)
    {
        //config(['app.idEdit' => $id]);
        $oferta = Oferta::find($id);
        $empreses = Empresa::all();
        return view('ofertes.editOferta', [
            'oferta' => $oferta, 'empreses' => $empreses]);
    }
    public function addOfertaView()
    {
        $empreses = Empresa::all();
        return view('ofertes.addOferta', ['empreses' => $empreses]);
    }
    public function getNumVacantsEdit(int $id)
    {
        //config(['app.idEdit' => $id]);
        $oferta = Oferta::find($id);
        return view('ofertes.restaNumVacants', [
            'oferta' => $oferta]);
    }

    public function RestaNumVacants(int $idOferta, int $numVacants)
    {
        $oferta = Oferta::find($idOferta);
        $oferta->NombreVacants = $oferta->NombreVacants - $numVacants;
        $oferta -> save();
        return redirect('oferta');
    }

    public function restaNumVacantspost(Request $request, int $id)
    {
        $numVacants = $request->NombreVacants;
        $oferta = Oferta::find($id);
        $oferta->NombreVacants = $oferta->NombreVacants - $numVacants;
        $oferta -> save();
        return redirect('oferta')->with('success-vacants', 'El nombre de vacants ha sigut restat correctament' );
    }
    public function Validator(Request $request, Oferta $oferta)
    {
        $this->validate($request, [
            'NombreVacants' => ['required'],

        ]);
    }
}
