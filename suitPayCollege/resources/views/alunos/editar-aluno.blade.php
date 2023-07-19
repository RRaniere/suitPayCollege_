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
        <h1 class="page-title">Editar aluno</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Alunos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar aluno</li>
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
                <form action="{{ url('/') }}/alunos/editar/{{$aluno->aluno_id}}" method="POST"> <!-- Adiciona o atributo action -->
                    @csrf <!-- Adiciona o token CSRF -->

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$aluno->nome}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{$aluno->sobrenome}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$aluno->email}}">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular" value="{{$aluno->celular}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="datanascimento">Data de nascimento</label>
                                <input type="date" class="form-control" id="datanascimento" name="datanascimento" placeholder="Data de nascimento" value="{{$aluno->data_nascimento}}">
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
