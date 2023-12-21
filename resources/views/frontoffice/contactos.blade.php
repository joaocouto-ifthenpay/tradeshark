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
    <link rel="stylesheet" href="css/contactos.css" />
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

        <!-- ......... -->
        <!-- Formulário -->
        <!-- ......... -->
        <h1 class="product-card_tit">Contactos</h1>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" id="nome" placeholder="Nome*" name="nome" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Email*" name="email" required>
            </div>
            <div class="form-group">
                <input type="text" id="contacto" placeholder="Contacto*" name="contacto" required>
            </div>
            <div class="form-group">
                <select class="contactos-selecione" id="assunto" name="assunto" required>
                    <option value="" disabled selected>Selecione*</option>
                    <option value="Dúvida">Dúvida</option>
                    <option value="Problema Técnico">Problema Técnico</option>
                    <option value="Feedback">Feedback</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="form-group">
                <textarea id="mensagem" placeholder="Mensagem*" name="mensagem" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>

        <!-- ......... -->
        <!-- contactos -->
        <!-- ......... -->
        <div class="content-line">

            <div class="info-block">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-details">
                    <p class="info-contact">22 50 72 810</p>
                    <p class="info-departments">
                        Dep. Comercial<br>
                        Serviço Pós-venda<br>
                        Dep. Contabilidade<br>
                        Outros assuntos
                    </p>
                </div>
            </div>

            <div class="info-block">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-details">
                    <p class="info-contact">info@tradeshark.pt</p>
                    <p class="info-departments">
                        Info sobre encomendas<br>
                        Compras em loja<br>
                        Avarias<br>
                        Outros assuntos
                    </p>
                </div>
            </div>

            <p class="additional-text">
                <i class="fas fa-info-circle"></i><strong class="location-info_titulo"> Chamada para a rede fixa nacional.</strong><br>
                Devido ao grande fluxo de chamadas que diariamente a loja TradeShark recebe, é humanamente impossível o atendimento telefónico a todos os clientes que nos tentem contactar por essa via.
                Para um serviço mais célere, solicitamos que selecione um dos assuntos no formulário acima.
            </p>

        </div>

        <!-- ........... -->
        <!-- Localização -->
        <!-- ........... -->
        <h1 style="margin-top: 80px;" class="product-card_tit">Localização</h1>
        <div class="location-container">
            <div class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25888.20920445665!2d-8.661776944528079!3d41.259177710415166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2467ea5b285899%3A0xc31b9d60ece933ed!2sTECMAIA%20Parque!5e0!3m2!1spt-PT!2spt!4v1702230367920!5m2!1spt-PT!2spt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-info">
                <p><Strong class="location-info_titulo">TradeShark Distribuição</Strong><br>
                    R. Eng. Frederico Ulrich 2650<br>
                    4470-605 Maia
                </p>

                <p><Strong class="location-info_titulo">Horário</Strong><br>
                    <Strong>Segunda a Sexta</Strong><br>
                    9:00 - 13:00 | 14:00 - 19:00<br>
                    <Strong>Sabados, Domingos e Feriados</Strong><br>
                    Encerrados<br>
                </p>

                <p><Strong class="location-info_titulo">Coordenadas GPS</Strong><br>
                    <Strong>Latitude</Strong><br>
                    41.2604212 | 41º00.0000<br>
                    <Strong>Latitude</Strong><br>
                    -8.6420923 | 8º00.0000<br>
                </p>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
</body>

</html>