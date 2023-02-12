<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Eloi',
            'email'=>'evelaazquez@ies-sabadell.cat',
            'password' => bcrypt('super3'),
            'grup'=>'A',
            'Coordinador'=>true
        ]);

        DB::table('users')->insert([
            'name'=>'Héctor',
            'email'=>'hmudarra@ies-sabadell.cat',
            'password'=> bcrypt('gato'),
            'grup'=>'B',
            'Coordinador'=>false
        ]);

    }
}
