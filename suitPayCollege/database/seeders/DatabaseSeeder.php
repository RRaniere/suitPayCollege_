<?php

namespace Database\Seeders;
use App\Models\Aluno;

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

        //$this->call(AlunosSeeder::class);

        $this->call(CursosSeeder::class);
        $this->call(UserSeeder::class);


        Aluno::factory()->count(10)->create();


       
    }
}
