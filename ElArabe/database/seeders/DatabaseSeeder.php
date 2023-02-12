<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([EstudisTableSeeder::class]);
        $this->call([EmpresaTableSeeder::class]);
        $this->call([OfertaTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([AlumnesTableSeeder::class]);
        $this->call([Enviaments::class]);
    }
}
