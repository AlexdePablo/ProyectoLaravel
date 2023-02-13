<?php

namespace App\Http\Controllers;

use App\Enums\Cicles;
use App\Mail\OfertaAlumne;
use App\Models\Alumne;
use App\Models\Empresa;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Http\Request;

class alumnecontroler extends Controller
{
    public function getAllAlumnes()
    {
        $alumnos = array();
        $alumnes = Alumne::paginate(5);
        $tutors = User::all();
        if ($this->getUsuari()==0){
           foreach ($alumnes as $alumne){
               if($alumne['idTutor']==auth()->user()->idUsuari){
                  array_push($alumnos, $alumne);
               }

           }
            return view('alumnes.getAllAlumnesBasic', [
                'alumnos' => $alumnos]);
        }else{
            return view('alumnes.getAllAlumnes', [
                'alumnes' => $alumnes,'tutors' => $tutors]);
        }
    }
    public function addAlumneView(){
        $tutors = User::all();
        return view('alumnes.addAlumne', ['tutors' => $tutors]);
    }
    public function addAlumne($nom, $nomdos, $dni, $curs, $cicle, $grup, $tel, $mail, $tut, $pra, $ruta){
        $event = new Alumne();
        $event-> name=$nom;
        $event-> lastName=$nomdos;
        $event-> DNI=$dni;
        $event->curs=$curs;
        $event-> cicle=$cicle;
        if (!$grup) {
            $tutor = User::findOrFail($tut);
            $event->grup = $tutor->grup;
        } else {
            $event-> grup=$grup;
        }
        $event-> telefon=$tel;
        $event-> email=$mail;
        $event-> idTutor=$tut;
        $event-> fent_practiques=$pra;
        $event-> ruta=$ruta;
        $event->save();
        $event2 = Alumne::findOrFail($event->idAlumne);
        return $event2->toJson();
    }
    public function editAlumne($id, $nom, $nomdos, $dni, $curs, $cicle, $grup, $tel, $mail, $tut, $pra, $ruta)
    {
        $Alumne = Alumne::find($id);
        $Alumne-> name=$nom;
        $Alumne-> lastName=$nomdos;
        $Alumne-> DNI=$dni;
        $Alumne->curs=$curs;
        $Alumne-> cicle=$cicle;
        $Alumne-> grup=$grup;
        $Alumne-> telefon=$tel;
        $Alumne-> email=$mail;
        $Alumne-> idTutor=$tut;
        $Alumne-> fent_practiques=$pra;
        $Alumne-> ruta=$ruta;
        $Alumne->save();
        return redirect('alumnes');
    }

    public function store(Request $request)
    {
        $this->Validator($request);
        $alumne = new Alumne();
        $alumne->name = $request-> name;
        $alumne->lastName = $request->lastName;
        $alumne->DNI = $request->DNI;
        $alumne->curs = $request->curs;
        $alumne->cicle = $request->cicle;
        $alumne->telefon = $request->telefon;
        $alumne->email = $request->email;
        $alumne->idTutor = $request->idTutor;
        $alumne->fent_practiques = $request->fent_practiques;
        $alumne->ruta = $request->ruta;
        $alumne -> save();
        return redirect('alumnes')->with('success-add', 'Alumne afegit correctament');
    }
    public function editStore(Request $request, int $id)
    {
        $this->Validator($request);
        $alumne = Alumne::find($id);
        $alumne->name = $request-> name;
        $alumne->lastName = $request->lastName;
        $alumne->DNI = $request->DNI;
        $alumne->curs = $request->curs;
        $alumne->cicle = $request->cicle;
        $alumne->telefon = $request->telefon;
        $alumne->email = $request->email;
        $alumne->idTutor = $request->idTutor;
        $alumne->fent_practiques = $request->fent_practiques;
        $alumne->ruta = $request->ruta;
        $alumne -> save();
        return redirect('alumnes')->with('success-edit', 'Alumne editat correctament');
    }
    public function Validator(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'lastName' => 'required|max:50',
            'DNI' => 'required|max:9|min:9',
            'telefon' => ['required','numeric'],
            'email' => ['required', 'string', 'email', 'regex:/(.*)@carpediem\.net$/i','max:255', 'unique:alumnes'],
            'ruta' => 'required',
        ]);
    }
    public function getCicle(string $nomCicle)
    {
        return  Cicles::desTraduction($nomCicle);
    }
    public function getDataEdit(int $id)
    {
        //config(['app.idEdit' => $id]);
        $alumne = Alumne::find($id);
        $tutors = User::all();
        return view('alumnes.editAlumne', [
            'alumne' => $alumne,
            'tutors' => $tutors]);
    }
    public function getDataEmail(int $id)
    {
        $ofertes = array();
        $alumne = Alumne::find($id);
        $ofertesMala = Oferta::all();

        foreach ($ofertesMala as $oferta) {
            if($oferta['NombreVacants']>0){
                array_push($ofertes, $oferta);
            }
        }

        return view('alumnes.afegirOferta', [
            'alumne' => $alumne,
            'ofertes' => $ofertes]);
    }
    public function getUsuari()
    {
        $usuari = auth()->user()->Coordinador;
        return $usuari;
    }

}
