<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Curso;
use Illuminate\Http\Request;
use DB;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $matriculas = DB::table('matriculas')
                    ->join('alunos', 'matriculas.aluno_id', '=', 'alunos.aluno_id')
                    ->join('cursos', 'matriculas.curso_id', '=', 'cursos.curso_id')
                    ->select('matriculas.matricula_id', 'matriculas.data_matricula' ,'alunos.nome as nome_aluno', 'alunos.sobrenome as sobrenome_aluno',  'cursos.nome as nome_curso')
                    ->get();

        return view('matriculas.lista-matriculas', ['matriculas' => $matriculas]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matriculas.nova-matricula');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $formValidado = $request->validate([
            'aluno' => 'required|int',
            'curso' => 'required|int',
            'dataMatricula' => 'required|date',
            
        ],[
            'aluno.required' => 'Aluno é obrigatório.',
            'curso.required' => 'Curso é obrigatório',
            'dataMatricula.required' => 'Data da matrícula é obrigatório',
            
        ]);


        $verificaMatricula = self::verificaMatricula($request->aluno, $request->curso);

        if($verificaMatricula === true){

        $matricula = new Matricula;
        $matricula->aluno_id = $request->aluno;
        $matricula->curso_id = $request->curso;
        $matricula->data_matricula = $request->dataMatricula;
      
        $matricula->save();

        return redirect()->route('matriculas.lista')->with('success', 'Matrícula criada com sucesso!');
        } else { 

            return $verificaMatricula;

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verificaMatricula($aluno_id, $curso_id) { 

        $matriculaExistente = Matricula::where('aluno_id', $aluno_id)->where('curso_id', $curso_id)->exists();
        if ($matriculaExistente) {
            return redirect()->back()->withErrors(['message' => 'Essa matrícula já existe.']);
        }

        $quantidadeMatriculadosCurso = Matricula::where('curso_id', $curso_id)->count();
        $quantidadeVagas = Curso::where('curso_id', $curso_id)->pluck('qtMaxMatriculas');

        if($quantidadeVagas[0] < $quantidadeMatriculadosCurso) { 
            return redirect()->back()->withErrors(['message' => 'Curso está lotado.']);
        }


        return true;

    }
}
