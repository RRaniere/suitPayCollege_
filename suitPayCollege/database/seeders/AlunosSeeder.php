<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;


class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Aluno::create([
                'nome' => 'Ramon',
                'sobrenome' => 'Raniere',
                'email' => 'ramonranieredev@gmail.com',
                'celular' => '61985866693',
                'data_nascimento' => '2000-08-25',
            ]);

            Aluno::create([
                'nome' => 'Gabriel',
                'sobrenome' => 'Ferreira',
                'email' => 'gabferreira@gmail.com',
                'celular' => '61985866691',
                'data_nascimento' => '1999-08-25',
            ]);

            Aluno::create([
                'nome' => 'Henrique',
                'sobrenome' => 'Alvez',
                'email' => 'henriquealvez@gmail.com',
                'celular' => '61985866690',
                'data_nascimento' => '1998-05-25',
            ]);

    }
}
