<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OfertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ofertas')->insert([
            'Descripció' => 'Hola caracola',
            'NombreVacants' => 3,
            'Curs'=> 2023,
            'NomContacte'=>'Alejandro',
            'CognomsContacte'=>'Andújar García',
            'EmailContacte'=>'wongobongosbongos@gmail.com',
            'idEstudis'=>1,
            'idEmpresa'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('Ofertas')->insert([
            'Descripció' => 'Hola caracola2',
            'NombreVacants' => 1,
            'Curs'=> 2023,
            'NomContacte'=>'Alejandro',
            'CognomsContacte'=>'Andújar García',
            'EmailContacte'=>'wongobongosbongos@gmail.com',
            'idEstudis'=>1,
            'idEmpresa'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('Ofertas')->insert([
            'Descripció' => 'Hola caracola3',
            'NombreVacants' => 4,
            'Curs'=> 2023,
            'NomContacte'=>'Alejandro',
            'CognomsContacte'=>'Andújar García',
            'EmailContacte'=>'wongobongosbongos@gmail.com',
            'idEstudis'=>1,
            'idEmpresa'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
