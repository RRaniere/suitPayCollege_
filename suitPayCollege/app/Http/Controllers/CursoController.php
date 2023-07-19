<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::where('lixeira', false)->get();

        return view('cursos.lista-cursos', ['cursos' => $cursos]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.novo-curso');
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
            'nome' => 'required|max:255|unique:cursos',
            'vagas' => 'required|max:255',
            'descricaoCurso' => 'required',
            'dataInicio' => 'required|date',
            'dataTermino' => 'required|date',
            'prazoInscricao' => 'required|date'
        ],[
            'nome.required' => 'Nome é obrigatório.',
            'nome.unique' => 'Já existe um curso com esse nome.',
            'vagas.required' => 'Vagas é obrigatório.',
            'descricaoCurso.required' => 'Descricão do curso é obrigatório.',
            'dataInicio.required' => 'Data de início é obrigatório.',
            'dataTermino.required' => 'Data de término é obrigatório.',
            'prazoInscricao.required' => 'Prazo de inscrição é obrigatório.',

            
        ]);


        $curso = new Curso;
        $curso->nome = $request->nome;
        $curso->descricao = $request->descricaoCurso;
        $curso->qtMaxMatriculas = $request->vagas;
        $curso->data_inicio = $request->dataInicio;
        $curso->data_termino = $request->dataTermino;
        $curso->prazo_inscricao = $request->prazoInscricao;

        $curso->save();

        return redirect()->route('cursos.lista')->with('success', 'Curso criado com sucesso!');    }

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
        $curso = Curso::find($id);


        return view('cursos.editar-curso', ['curso' => $curso]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $formValidado = $request->validate([
            'nome' => 'required|max:255|unique:cursos,nome,'.$id.',curso_id',
            'vagas' => 'required|max:255',
            'descricaoCurso' => 'required',
            'dataInicio' => 'required|date',
            'dataTermino' => 'required|date',
            'prazoInscricao' => 'required|date'
        ],[
            'nome.required' => 'Nome é obrigatório.',
            'nome.unique' => 'Já existe um curso com esse nome.',
            'vagas.required' => 'Vagas é obrigatório.',
            'descricaoCurso.required' => 'Descricão do curso é obrigatório.',
            'dataInicio.required' => 'Data de início é obrigatório.',
            'dataTermino.required' => 'Data de término é obrigatório.',
            'prazoInscricao.required' => 'Prazo de inscrição é obrigatório.',

            
        ]);

        $curso = Curso::find($id);

        $curso->nome = $request->nome;
        $curso->descricao = $request->descricaoCurso;
        $curso->qtMaxMatriculas = $request->vagas;
        $curso->data_inicio = $request->dataInicio;
        $curso->data_termino = $request->dataTermino;
        $curso->prazo_inscricao = $request->prazoInscricao;

        $curso->save();

        return redirect()->route('cursos.lista')->with('success', 'Curso editado com sucesso!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->lixeira = true;
        $curso->save();

        return redirect()->route('cursos.lista')->with('success', 'Curso excluído com sucesso!');
    }

    public function CursosAtivos() { 

        $cursos = Curso::where('lixeira', false)->get();

        return $cursos;
    }

}
