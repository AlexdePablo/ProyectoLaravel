<?php

namespace App\Http\Controllers;

use App\Models\Enviament;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function getDataEdit()
    {
        $id = auth()->user()->idUsuari;
        $user = User::find($id);
        return view('editProfile', [
            'user' => $user]);
    }

    public function editStore(Request $request)
    {
        $this->Validator($request);
        $id = auth()->user()->idUsuari;
        $user = User::find($id);
        $user->name = $request-> name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->grup = $request->grup;
        $user->Coordinador = $request->Coordinador;
        $user -> save();
        return redirect('/');
    }
    public function Validator(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'regex:/(.*)@carpediem\.net$/i','max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function sendEmail(Request $request, int $idAlumne)
    {
        $enviament = new Enviament();
        $enviament->idOferta = $request->idOferta;
        $enviament->idAlumne = $idAlumne;
        $oferta = Oferta::find($enviament->idOferta);
        $enviament->Observacions = $oferta->Descripció;
        $enviament->Estat = "Acceptat";
        $enviament->save();
        $alumne = \App\Models\Alumne::find($idAlumne);
        $correo = new \App\Mail\OfertaAlumne($oferta);
        \Illuminate\Support\Facades\Mail::to($alumne->email)->send($correo);
        return redirect('getEnviaments');

    }
}
