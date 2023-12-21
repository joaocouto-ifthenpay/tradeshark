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
            <a href="inicio.html">
                <img src="assets/logo.svg" alt="TradeShark" class="logo">
            </a>
            <ul class="main-menu">
                <li><a href="inicio.html">Início</a></li>
                <li><a href="loja.html">Loja</a></li>
                <li><a href="contactos.html">Contactos</a></li>
            </ul>

            <!-- Icon do utilizador -->
            <div class="dropdown">
                <button class="dropdown-btn">
                    <a class="dropdown-icon" href="#"><i class="fas fa-user-circle"></i></a>
                </button>
                <div class="dropdown-content">
                    <a href="perfil.html">Perfil</a>
                    <a href="#">Configurações</a>
                    <a href="login.html">Sair</a>
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

        <!-- ............ -->
        <!--   Showcase   -->
        <!-- ............ -->
        <header class="showcase-loja">
        </header>

        <!-- ...................... -->
        <!-- Product cards / titulo -->
        <!-- ...................... -->
        <h1 class="product-card_tit">Mais vendidos</h1>
        <div class="geral_product-card">
            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/Bobina-1-1-1024x1024.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/cimento-cimpor.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/blocos-de-Concreto.png.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px;" class="geral_product-card">
            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/Tinta-Plastica-Supercryl-1.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/tijolo.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/pladur-n.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/3-7.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">Título</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>1.780€</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ......... -->
        <!-- Paginação -->
        <!-- ......... -->
        <div class="pagination-container">
            <div class="pagination">
                <a href="#"><i class="fas fa-step-backward"></i></a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
                <a href="#"><i class="fas fa-step-forward"></i></a>
            </div>
        </div>

        <!-- ......... -->
        <!-- Novidades -->
        <!-- ......... -->
        <h1 class="product-card_tit">Novidadess</h1>
        <div class="info-container">
            <div class="info-card">
                <div class="info-img-box">
                    <img src="assets/LOGO.svg">
                </div>
                <div class="info-content">
                    <h2>Info 1</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Ver mais</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-img-box">
                    <img src="assets/LOGO.svg">
                </div>
                <div class="info-content">
                    <h2>Info 2</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Ver mais</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-img-box">
                    <img src="assets/LOGO.svg">
                </div>
                <div class="info-content">
                    <h2>Info 3</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Ver mais</a>
                </div>
            </div>
        </div>

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