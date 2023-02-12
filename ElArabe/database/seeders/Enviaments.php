<?php

namespace Database\Seeders;

use App\Enums\Estats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Enviaments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enviaments')->insert([
            'idOferta' => 1,
            'idAlumne' => 1,
            'Observacions' => "T.Hanks = G.racias",
            'Estat' => Estats::NoConveni,
        ]);
        DB::table('enviaments')->insert([
            'idOferta' => 2,
            'idAlumne' => 2,
            'Observacions' => "Shekespeare = Batido de Pera",
            'Estat' => Estats::Acceptat,
        ]);
        DB::table('enviaments')->insert([
            'idOferta' => 1,
            'idAlumne' => 2,
            'Observacions' => "Furthermore = Padrea Mas",
            'Estat' => Estats::FinalitzatContractat,
        ]);
        DB::table('enviaments')->insert([
            'idOferta' => 2,
            'idAlumne' => 1,
            'Observacions' => "Welcome = #####",
            'Estat' => Estats::FinalitzatNoContractat,
        ]);
    }
}
