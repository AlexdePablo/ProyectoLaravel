<?php

namespace Database\Seeders;

use App\Enums\Cicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('alumnes')->insert([
            'name' => 'Hang',
            'lastName' => 'Chen',
            'DNI' => 'X9280573G',
            'curs' => '2023-2024',
            'cicle' => Cicles::ASIX,
            'telefon' => '635384699',
            'grup' => 'A',
            'email' => 'hchen@ies-sabadell.cat',
            'idTutor' => 1,
            'fent_practiques' => True,
            'ruta' => 'cv',
        ]);

        DB::table('alumnes')->insert([
            'name' => 'Adrià',
            'lastName' => 'Moyano',
            'DNI' => '49222628Y',
            'curs' => '2023-2024',
            'cicle' => Cicles::DAM,
            'telefon' => '601075317',
            'grup' => 'B',
            'email' => 'amoyano@ies-sabadell.cat',
            'idTutor' => 2,
            'fent_practiques' => True,
            'ruta' => 'cv',
        ]);

        DB::table('alumnes')->insert([
            'name' => 'Alejandro',
            'lastName' => 'Andujar',
            'DNI' => '47742480T',
            'curs' => '2023-2024',
            'cicle' => Cicles::SMX,
            'telefon' => '635781371',
            'grup' => 'B',
            'email' => 'andujarg@ies-sabadell.cat',
            'idTutor' => 2,
            'fent_practiques' => False,
            'ruta' => 'cv',
        ]);
    }
}
