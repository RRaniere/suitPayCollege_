@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="">Matriculas</h6>
                                <h3 class="mb-2 number-font">{{$dados['matriculas']}}</h3>
                                <p class="text-muted mb-0">
                                    <span class="text-primary"><i class="fa fa-chevron-circle-up text-primary me-1"></i> 3%</span> último mês
                                </p>
                            </div>
                            <div class="col col-auto">
                                <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                                    <i class="fe fe-trending-up text-white mb-5 "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="">Alunos</h6>
                                <h3 class="mb-2 number-font">{{$dados['alunos']}}</h3>
                                <p class="text-muted mb-0">
                                    <span class="text-secondary"><i class="fa fa-chevron-circle-up text-secondary me-1"></i> 9%</span> último mê
                                </p>
                            </div>
                            <div class="col col-auto">
                                <div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
                                    <i class="icon icon-user text-white mb-5 "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="">Cursos</h6>
                                <h3 class="mb-2 number-font">{{$dados['cursos']}}</h3>
                                <p class="text-muted mb-0">
                                    <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 8</span> finalizados
                                </p>
                            </div>
                            <div class="col col-auto">
                                <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                    <i class="fe fe-globe text-white mb-5 "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
