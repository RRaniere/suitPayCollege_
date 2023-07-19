         <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <aside class="app-sidebar ">
                <div class="side-header">
                    <a class="header-brand1" href="index.html">
                        <img src="{{url('/')}}/assets/images/brand/logo-3.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{url('/')}}/assets/images/brand/logo-3.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="{{url('/')}}/assets/images/brand/logo-3.png" class="header-brand-img light-logo" alt="logo">
                        <img src="{{url('/')}}/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                    </a>
                    <!-- LOGO -->
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                        </svg></div>
                    <ul class="side-menu">
                        <li class="sub-category">
                            <h3>Dashboard</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>
                       
                        <li class="sub-category">
                            <h3>Área de trabalho</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Alunos</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Alunos</a></li>
                                <li><a href="{{ url('/') }}/alunos/novo" class="slide-item">Novo aluno</a></li>
                                <li><a href="{{ url('/') }}/alunos/lista" class="slide-item">Listar</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Cursos</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Cursos</a></li>
                                <li><a href="{{ url('/') }}/cursos/novo" class="slide-item">Novo curso</a></li>
                                <li><a href="{{ url('/') }}/cursos/lista" class="slide-item">Listar</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Matriculas</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Matricula</a></li>
                                <li><a href="{{ url('/') }}/matriculas/nova" class="slide-item">Nova matricula</a></li>
                                <li><a href="{{ url('/') }}/matriculas/lista" class="slide-item">Listar</a></li>

                        </li>
                        </li>
                   
                </div>
            </aside>
        </div>