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
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/loja.css" />
    <link rel="icon" href="assets/LOGO2.png" />
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
                <img src="assets/logo.svg" alt="TradeShark" class="logo">
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

        <!-- ........ -->
        <!-- Showcase -->
        <!--......... -->
        <header class="showcase">
            <h2>TradeShark</h2>
            <p>
                Transformando oportunidades em negócios de sucesso. O seu parceiro confiável para um futuro próspero.
            </p>
            <a href="#" class="btn">
                Ver mais <i class="fas fa-chevron-right"></i>
            </a>
        </header>

        <!-- ............ -->
        <!-- Home cards 1 -->
        <!-- ............ -->
        <section class="home-cards">
            <div>
                <i class="fas fa-handshake"></i>
                <h3>Colaboração Empresarial</h3>
                <p>
                    Juntos, construímos mais por menos - aumente a eficiência e reduza custos.
                </p>
            </div>
            <div>
                <i class="fas fa-chart-line"></i>
                <h3>Potencie as Suas Vendas</h3>
                <p>
                    Pacotes exclusivos a preços competitivos para expandir o seu portefólio.
                </p>
            </div>
            <div>
                <i class="fas fa-users"></i>
                <h3>Economia Colaborativa</h3>
                <p>
                    Junte-se a outras empresas para poupar enquanto cresce o seu negócio.
                </p>
            </div>
            <div>
                <i class="fas fa-cogs"></i>
                <h3>Flexibilidade à Sua Medida</h3>
                <p>
                    Crie pacotes adaptados às suas necessidades, maximizando os seus lucros.
                </p>
            </div>
        </section>
        

        <!-- ............ -->
        <!-- banner médio -->
        <!-- ............ -->
        <section class="middle-banner">
            <div class="middle-banner_content">
                <h2>A Nossa Equipa: O Motor do Sucesso</h2>
                <p>Trabalhamos em conjunto para superar desafios e alcançar conquistas. Confie no nosso compromisso com a excelência e a inovação.</p>
                <a href="#" class="btn">
                    Ver tudo <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>

        <!-- ............. -->
        <!-- Product cards -->
        <!-- ............. -->
        <h1 class="product-card_tit">Pacotes</h1>
        <div class="geral_product-card">
            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Pav. Flutuante</a></h4>
                    <p>Material resistente e versátil para construção.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 21%">21%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/Bobina-1-1-1024x1024.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Cabo de Rede</a></h4>
                    <p>Solução eficiente para instalação de redes de comunicação.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%">15%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/cimento-cimpor.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Cimento</a></h4>
                    <p>Fundamento essencial para diversas etapas da construção.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 1%">1%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/blocos-de-Concreto.png.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Tijolos de betão</a></h4>
                    <p>Componente robusto para estruturas duradouras.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px;" class="geral_product-card">
            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/Tinta-Plastica-Supercryl-1.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Tinta Plástica</a></h4>
                    <p>Revestimento ideal para ambientes internos.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 97%">97%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/tijolo.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Tijolos</a></h4>
                    <p>Elemento chave na construção de paredes e estruturas.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/pladur-n.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Pladur</a></h4>
                    <p>Material leve e versátil para divisórias e acabamentos.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 23%">23%</div>
                </div>
            </div>

            <div class="product-card">
                <div class="badge">Destaque
                    <i class="fas fa-fire"></i>
                </div>
                <div class="product-tumb">
                    <img src="assets/3-7.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Tintas de cor</a></h4>
                    <p>Opção decorativa para ambientes diversos.</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
                </div>
            </div>
        </div>

        <!-- ............... -->
        <!-- Banner de fundo -->
        <!-- ............... -->
        <section class="bottom-banner">
            <div class="bottom-banner_content">
                <h2>Construímos Juntos, Alcançamos Mais</h2>
                <p>Unidos pelo compromisso, concretizamos metas e expandimos horizontes. Junte-se a nós para atingir novas conquistas.</p>
                <a href="#" class="btn">
                    Ver tudo <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>

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

        <script src="js/scripts.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>