<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4" href="#">
                <img src="{{ asset('img/5058343.png') }}" alt="Logo" width="40" height="10" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- SiderBar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex justify-content-between w-100">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">COMPRA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">NOSOTROS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('indexLogin')}}">INICIAR SESIÓN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>