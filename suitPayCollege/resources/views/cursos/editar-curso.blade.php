@extends('layouts.app')

@section('content')

@if ($errors->any())
<br>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="page-header">
    <div>
        <h1 class="page-title">Editar Curso</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Cursos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar curso</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Editar</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/') }}/cursos/editar/{{$curso->curso_id}}" method="POST"> <!-- Adiciona o atributo action -->
                    @csrf <!-- Adiciona o token CSRF -->

                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value={{$curso->nome}}>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label for="vagas">Quantidade de vagas</label>
                                <input type="number" class="form-control" id="vagas" name="vagas" placeholder="Nº Vagas" value={{$curso->qtMaxMatriculas}}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricaoCurso">Descrição do curso</label>
                        <textarea class="form-control" rows="6" id=descricaoCurso" name="descricaoCurso" placeholder="Descrição do curso" >{{$curso->descricao}}</textarea>
                    </div>
                    <div class="row">
                  
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="dataInicio">Data de início</label>
                                <input type="date" class="form-control" id="dataInicio" name="dataInicio" value={{$curso->data_inicio}} >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="dataTermino">Data de término</label>
                                <input type="date" class="form-control" id="dataTermino" name="dataTermino" value={{$curso->data_termino}} >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="prazoInscricao">Prazo de inscrição</label>
                                <input type="date" class="form-control" id="prazoInscricao" name="prazoInscricao" value={{$curso->prazo_inscricao}} >
                            </div>
                        </div>
                    </div>
     
          
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success mt-1">Salvar</button> 
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
