<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="/css/styles.css">
    <!--JS-->
    <script type="text/javascript" src="{{ asset ('js/lista-mestra.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <script src="{{ $mensurationChart->cdn() }}"></script>

    <div class="main-container d-flex">
        <div class="sidebar border-radius" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-center">
                <span class="d-flex justify-content-center"><img src="{{ asset('assets/logo.png') }}" alt="logo"></span>
            </div>
            <ul class="list-unstyled px-2 pt-3">
                <li class="active">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-home"></i> Dashboard</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-th"></i> Pranchas</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-folder-open"></i> Lista Mestra</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-briefcase"></i> Projetos</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-spinner"></i> Logística</a>
                </li>
                <hr class="h-color mx-2">
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-user-circle"></i> Perfil</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-cogs"></i> Configurações</a>
                </li>
            </ul>
        </div>

        <div class="content">
            <nav class="navbar d-md-none navbar-mobile">
                <div class="container-fluid">
                    <div class="header-box px-2 pt-3 pb-4">
                        <span class="d-flex justify-content-center"><img src="{{ asset('assets/logo.png') }}" alt="logo"></span>
                    </div>
                    <button class="navbar-toggler p-3 border-0 d-flex justify-content-end btn-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <ul class="list-unstyled px-2 pt-3 mobile-list-items">
                                    <li class="active">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-home"></i> Dashboard</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-th"></i> Pranchas</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-folder-open"></i> Lista Mestra</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-briefcase"></i> Projetos</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-spinner"></i> Logística</a>
                                    </li>
                                    <hr class="h-color mx-2">
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-user-circle"></i> Perfil</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="text-decoration-none px-3 py-3 d-block"><i class="fal fa-cogs"></i> Configurações</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="data-container p-4">
                <div class="container">

                    <div class="row data-line TITULO align-items-center justify-items-center p-4 pb-0 mb-4 b-gray border-radius">
                        <div class="col fs-5 t-h0">
                            <i class="fal fa-home"></i>
                            Dashboard
                        </div>
                    </div>

                    <div class="row data-line PRANCHAS ANALISE DE PROJETOS E LISTA MESTRA py-4 b-gray border-radius d-flex justify-content-around">

                        <div class="col-12 col-md-5 data-container p-4 border-radius b-lightgray">
                            <div class="row">
                                <div class="data-header">
                                    <h1 class="t-h1">Pranchas</h1>
                                    <h1 class="t-h2 t-high p-2">30 <spam class="t-support">projetos</spam>
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-2 p-2 b-blue border-radius j-center">
                                    <i class="fa fa-hourglass-start fa-1x i-color"></i>
                                    <h2 class="m-0 t-h2 p-1">15</h2>
                                    <spam class="t-support-black m-0">Pendentes</spam>
                                </div>
                                <div class="col m-2 p-2 b-green border-radius j-center">
                                    <i class="fal fa fa-check fa-1x i-color"></i>
                                    <h2 class="m-0 t-h2 p-1">10</h2>
                                    <spam class="t-support-black m-0">Aprovados</spam>
                                </div>
                                <div class="col m-2 p-2 b-pink border-radius j-center">
                                    <i class="fal fa fa-ban fa-1x i-color"></i>
                                    <h2 class="m-0 t-h2 p-1">05</h2>
                                    <spam class="t-support-black m-0">Reprovados</spam>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 PRANCHAS col-md-3 data-container p-4 border-radius b-lightgray">
                            <div class="row">
                                <div class="data-header">
                                    <h1 class="t-h1">Análise de projetos</h1>
                                    <h1 class="t-high p-2">05 <spam class="t-support">emitidos</spam>
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-2 p-2 b-blue border-radius j-center">
                                    <i class="fa fa-repeat fa-1x i-black"></i>
                                    <h2 class="m-0 t-h2 p-1">02</h2>
                                    <spam class="t-support-black m-0">A revisar</spam>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 ANALISE DE PROJETOS col-md-3 data-container p-4 border-radius b-lightgray">
                            <div class="data-header">
                                <h1 class="t-h1">Lista mestra</h1>
                                <h1 class="t-h2 t-high p-2">50 <spam class="t-support">Upload geral</spam>
                                </h1>
                            </div>
                            <div class="row j-center">
                                <div class="col b-purple border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Últimos 14 dias: <spam class="upload-number border-radius p-2">05</spam>
                                    </h1>
                                </div>
                                <div class="col b-purple border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Últimos 14 dias: <spam class="upload-number border-radius p-2">05</spam>
                                    </h1>
                                </div>
                                <div class="col b-purple border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Últimos 14 dias: <spam class="upload-number border-radius p-2">15</spam>
                                    </h1>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row data-line LISTA MESTRApy-4 b-gray border-radius d-flex justify-content-around">

                        <div class="CONTROLE LOGISTICO col-12 col-md-3 data-container p-4 border-radius b-lightgray">
                            <div class="row">
                                <div class="data-header">
                                    <h1 class="t-h1">Controle logístico</h1>
                                </div>
                            </div>
                            <div class="row b-red justify-content-around border-radius">
                            <div class="row j-center">
                                <div class="col b-pink border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Fase 01 <spam class="fase-number border-radius p-1">10</spam>
                                    </h1>
                                </div>
                                <div class="col b-pink border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Fase 02  <spam class="fase-number border-radius p-1">20</spam>
                                    </h1>
                                </div>
                                <div class="col b-pink border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Fase 03  <spam class="fase-number border-radius p-1">50</spam>
                                    </h1>
                                </div>
                                <div class="col b-pink border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Fase 04  <spam class="fase-number border-radius p-1">10</spam>
                                    </h1>
                                </div>
                                <div class="col b-pink border-radius mb-1">
                                    <h1 class="t-support d-flex justify-content-between mt-2"> Fase 05 <spam class="fase-number border-radius p-1">30</spam>
                                    </h1>
                                </div>
                            </div>

                            </div>
                        </div>

                        <div class="col-12 col-md-4 data-container p-4 border-radius b-lightgray">
                            <div class="row">
                                <div class="data-header">
                                    <h1 class="t-h1">Planejamento</h1>
                                    <h1 class="t-h2 t-high p-2">10 <spam class="t-support">atividades geradas</spam>
                                    </h1>
                                </div>
                            </div>
                            <div class="row b-red justify-content-around border-radius">
                                {!! $activityChart->container()!!}

                                {{ $activityChart->script() }}
                            </div>
                        </div>

                        <div class="col-12 col-md-4 data-container p-4 border-radius b-lightgray">
                            <div class="row">
                                <div class="pb-3">
                                    <h1 class="t-h1">Medição</h1>
                                </div>
                            </div>
                            <div class="row b-red justify-content-around border-radius">
                                {!! $mensurationChart->container()!!}

                                {{ $mensurationChart->script() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>