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
    <script src="/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
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

            <div class="dashboard-content px-3 pt-4">
                <h2 class="fs-5"> Dashboard</h2>
                <p>Aqui vai o resto do conteudo, vulgo a parte importante
            </div>
        </div>
</body>

</html>
