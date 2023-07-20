<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;

class DashboardController extends Controller
{
    public function index()
    {
        $dados['matriculas'] = Matricula::where('lixeira', false)->count();
        $dados['alunos'] =  Aluno::where('lixeira', false)->count();
        $dados['cursos'] =  Curso::where('lixeira', false)->count();

        return view('dashboard', ['dados' => $dados]);    


    }
}
