<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;


class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nome' => 'Matemática',
            'descricao' => 'Curso de matemática...',
            'qtMaxMatriculas' => 10,
            'prazo_inscricao' => '2023-07-25',
            'data_inicio' => '2023-08-01',
            'data_termino' => '2023-08-30'

        ]);

        Curso::create([
            'nome' => 'Geografia',
            'descricao' => 'Curso de geografia...',
            'qtMaxMatriculas' => 10,
            'prazo_inscricao' => '2023-07-25',
            'data_inicio' => '2023-08-01',
            'data_termino' => '2023-08-30'

        ]);

        Curso::create([
            'nome' => 'História',
            'descricao' => 'Curso de histório...',
            'qtMaxMatriculas' => 10,
            'prazo_inscricao' => '2023-07-25',
            'data_inicio' => '2023-08-01',
            'data_termino' => '2023-08-30'

        ]);
    }
}
