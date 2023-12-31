<!DOCTYPE html>
<html lang="pt-PT" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TradeShark</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loja.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactos.css') }}">
    <link rel="icon" href="{{ asset('assets/LOGO2.png') }}">
</head>

<body>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="container">

        <!-- ...... -->
        <!-- Navbar -->
        <!-- ...... -->
        <nav class="main-nav">
            <a href={{ route('inicio') }}>
                <img src="{{ asset('assets/logo.svg') }}" alt="TradeShark" class="logo">
            </a>
            <ul class="main-menu">
                <li><a href={{ route('inicio') }}>Início</a></li>
                <li><a href={{ route('loja') }}>Loja</a></li>
                <li><a href={{ route('contactos') }}>Contactos</a></li>
            </ul>

            <!-- Icon do utilizador -->
            <div class="dropdown">
                <button class="dropdown-btn">
                    <a class="dropdown-icon" href="#"><i class="fas fa-user-circle"></i></a>
                </button>
                <div class="dropdown-content">
                    <a href={{ route('perfil') }}>Perfil</a>
                    <a href="#">Configurações</a>
                    <a href={{ route('login') }}>Sair</a>
                </div>
            </div>

            <!--Bt de trocar de ligh para dark mode-->
            <div class="switch">
                <div class="lua">
                    <i class="fas fa-sun"></i>
                </div>
                <span class="switch_track"></span>
                <div class="sol">
                    <i class="fas fa-moon"></i>
                </div>

            </div>

            <ul class="right-menu">
                <li>
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
        </nav>


        @yield('content')

        <!-- ...... -->
        <!-- Footer -->
        <!-- ...... -->
        <footer class="site-footer">
            <div class="footer-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>Sobre</h6>
                        <p class="text-justify">Na TradeShark.pt, somos alunos de Engenharia Informática apaixonados por inovação na indústria da construção.
                            Oferecemos pacotes de artigos de construção a preços competitivos, permitindo que empresas economizem sem comprometer a qualidade.
                            O nosso objetivo é impulsionar o crescimento das empresas, oferecendo oportunidades acessíveis para construir um futuro sólido e próspero para todos</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Membros</h6>
                        <ul class="footer-links">
                            <li><a href="#">Fábio</a></li>
                            <li><a href="#">Fernando</a></li>
                            <li><a href="#">João</a></li>
                            <li><a href="#">José</a></li>
                            <li><a href="#">Maksym</a></li>
                            <li><a href="#">Paulo</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Links rápidos</h6>
                        <ul class="footer-links">
                            <li><a href="#">Sobre nós</a></li>
                            <li><a href="#">Contactos</a></li>
                            <li><a href="#">Políticas de privacidade</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2023 Todos os direitos reservados por
                            <a href="#">TradeShark</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>