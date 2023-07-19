<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alunos = Aluno::where('lixeira', false)->get();

        return view('alunos.lista-alunos', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('alunos.novo-aluno');
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
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'email' => 'required|unique:alunos',
            'celular' => 'required|unique:alunos',
            'datanascimento' => 'required|date',
        ],[
            'nome.required' => 'Nome é obrigatório.',
            'sobrenome.required' => 'Sobrenome é obrigatório.',
            'email.required' => 'Email é obrigatório.',
            'email.unique' => 'Já existe um aluno cadastrado com esse email.',
            'celular.required' => 'Celular é obrigatório.',
            'celular.unique' => 'Já existe um aluno cadastrado com esse celular.',
            'datanascimento.required' => 'Data de nascimento é obrigatório.',
        ]);


        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->sobrenome = $request->sobrenome;
        $aluno->email = $request->email;
        $aluno->celular = $request->celular;
        $aluno->data_nascimento = $request->datanascimento;

        $aluno->save();

        return redirect()->route('alunos.lista')->with('success', 'Aluno criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $aluno = Aluno::find($id);


        return view('alunos.editar-aluno', ['aluno' => $aluno]);

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

        $formValidado = $request->validate([
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'email' => 'required|unique:alunos,email,'.$id.',aluno_id',
            'celular' => 'required|unique:alunos,celular,'.$id.',aluno_id',
            'datanascimento' => 'required|date',
        ],[
            'nome.required' => 'Nome é obrigatório.',
            'sobrenome.required' => 'Sobrenome é obrigatório.',
            'email.required' => 'Email é obrigatório.',
            'email.unique' => 'Já existe um aluno cadastrado com esse email.',
            'celular.required' => 'Celular é obrigatório.',
            'celular.unique' => 'Já existe um aluno cadastrado com esse celular.',
            'datanascimento.required' => 'Data de nascimento é obrigatório.',
        ]);
        
        $aluno = Aluno::find($id);

        
        $aluno->nome = $request->nome;
        $aluno->sobrenome = $request->sobrenome;
        $aluno->email = $request->email;
        $aluno->celular = $request->celular;
        $aluno->data_nascimento = $request->datanascimento;
        
        $aluno->save();
        
        return redirect()->route('alunos.lista')->with('success', 'Aluno atualizado com sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->lixeira = true;
        $aluno->save();

        return redirect()->route('alunos.lista')->with('success', 'Aluno excluído com sucesso!');

    }

    public function alunosAtivos() { 

        $alunos = Aluno::where('lixeira', false)->get();

        return $alunos;
    }

 
}
