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
        <h1 class="page-title">Lista Matriculas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Matrículas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista matrículas</li>
        </ol>
    </div>

    <div class="ms-auto pageheader-btn">

        <a href="{{ url('/') }}/matriculas/nova" class="btn btn-info text-white ">
            <span>
                <i class="fe fe-plus"></i>
            </span> Adicionar matrícula
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
                                <th class="wd-15p border-bottom-0">Sobrenome</th>
                                <th class="wd-20p border-bottom-0">Curso</th>
                                <th class="wd-15p border-bottom-0 text-center">Data da matrícula</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($matriculas as $matricula)

                            <tr>
                                <td>{{$matricula->nome_aluno}}</td>
                                <td>{{$matricula->sobrenome_aluno}}</td>
                                <td class="text-center">{{$matricula->nome_curso}}</td>
                                <td class="text-center">{{\Carbon\Carbon::parse($matricula->data_matricula)->format('d/m/Y');}} </td>
                            </tr>
                                
                            @endforeach
                           
                          
                           
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
