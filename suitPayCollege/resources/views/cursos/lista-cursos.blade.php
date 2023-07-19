@extends('layouts.app')

@section('content')

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show mb-0 mt-4" role="alert">
    <span class="alert-inner--text">{{ session('success') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

@endif

<div class="page-header">
    <div>
        <h1 class="page-title">Lista Cursos</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Cursos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista cursos</li>
        </ol>
    </div>

    <div class="ms-auto pageheader-btn">

        <a href="{{ url('/') }}/cursos/novo" class="btn btn-info text-white ">
            <span>
                <i class="fe fe-plus"></i>
            </span> Adicionar curso
        </a>
    
    </div>
</div>



<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Nome</th>
                                <th class="wd-15p border-bottom-0">Descricao</th>
                                <th class="wd-15p border-bottom-0 text-center">Prazo inscricao</th>
                                <th class="wd-10p border-bottom-0 text-center">Data de início</th>
                                <th class="wd-25p border-bottom-0 text-center">Data de término</th>
                                <th class="wd-20p border-bottom-0 text-center">Quantidade de vagas</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cursos as $curso)

                            <tr>
                                <td>{{$curso->nome}}</td>
                                <td>{{$curso->descricao}}</td>
                                <td class="text-center">{{\Carbon\Carbon::parse($curso->prazo_inscricao)->format('d/m/Y');}}</td>
                                <td class="text-center">{{\Carbon\Carbon::parse($curso->data_inicio)->format('d/m/Y');}} </td>
                                <td class="text-center">{{\Carbon\Carbon::parse($curso->data_termino)->format('d/m/Y');}} </td>
                                <td class="text-center">{{$curso->qtMaxMatriculas}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/') }}/cursos/editar/{{$curso->curso_id}}" class="badge bg-info  me-1 "><i class="fa fa-pencil"></i></a>
                                    <a href="{{ url('/') }}/cursos/apagar/{{$curso->curso_id}}" class="badge bg-danger  me-1 "><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                           
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
