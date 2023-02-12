<?php

namespace App\Http\Controllers;

use App\Models\Enviament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        if (Auth::check()) {
            $envasifnasd = array();
            $enviaments = Enviament::all();
            //return $enviaments->toJson();
            foreach ($enviaments as $enviament)
            {
                if($enviament['Estat'] === 'Acceptat'){
                    array_push($envasifnasd, $enviament);
                }
            }
            return view('enviaments.enviamentsOberts', [
                'envasifnasd' => $envasifnasd]);
        } else {
            return view('auth/login');
        }
    }
}
