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
        <h1 class="page-title">Nova Matricula</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Matriculas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nova matricula</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cadastro</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/') }}/matriculas/nova" method="POST"> <!-- Adiciona o atributo action -->
                    @csrf <!-- Adiciona o token CSRF -->

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome do aluno</label>
                                <select class="form-control" id="nome" name="aluno" >
                                    <option value="">Selecione um aluno</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="nome">Curso</label>
                                <select class="form-control" class="form-control" id="curso" name="curso" placeholder="Curso">
                                    <option value="">Selecione um curso</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="dataInicio">Data de matrícula</label>
                                <input type="date" class="form-control" id="dataMatricula" name="dataMatricula" >
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ url('/') }}/alunos/alunos-ativos",
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                console.log('oioj')
                var select = $('#nome');


                console.log(response)
                $.each(response, function(key, value) {
                    select.append('<option value="' + value.aluno_id + '">' + value.nome + ' ' + value.sobrenome + '</option>');
                });
            }
        });
    });

    $(document).ready(function() {
        $.ajax({
            url: "{{ url('/') }}/cursos/cursos-ativos",
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                var select = $('#curso');


                console.log(response)
                $.each(response, function(key, value) {
                    select.append('<option value="' + value.curso_id + '">' + value.nome + '</option>');
                });
            }
        });
    });
</script>



@endsection
