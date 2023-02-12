<?php

namespace Database\Seeders;

use App\Enums\Cicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudis')->insert([
            'NomModul' => Cicles::ASIX,
        ]);

        DB::table('estudis')->insert([
            'NomModul' => Cicles::DAM,
        ]);

        DB::table('estudis')->insert([
            'NomModul' => Cicles::DAMVI,
        ]);

        DB::table('estudis')->insert([
            'NomModul' => Cicles::SMX,
        ]);
    }
}
