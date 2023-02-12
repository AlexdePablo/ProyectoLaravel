<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insert([
            'name' => 'Trivago',
            'adresa' => 'Sevilla, calle Siesta Nª12',
            'telefon' => '112112112',
            'email' => 'zzfffffz@gmail.com',
        ]);
        DB::table('empresa')->insert([
            'name' => 'Imaginae',
            'adresa' => 'Sabadell, Plaza Catalunya Nª30',
            'telefon' => '423567908',
            'email' => 'zzfz@gmail.com',
        ]);
        DB::table('empresa')->insert([
            'name' => 'WBongos',
            'adresa' => 'Madrid, calle Playa Nª5',
            'telefon' => '325981347',
            'email' => 'zfffzz@gmail.com',
        ]);
    }
}
