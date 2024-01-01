@extends('layouts.frontoffice')

@section('content')

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
                    <img src="{{ asset('assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png') }}" alt="">
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
                    <img src="{{ asset('assets/Bobina-1-1-1024x1024.png') }}" alt="">
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
                    <img src="{{ asset('assets/cimento-cimpor.png') }}" alt="">
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
                    <img src="{{ asset('assets/blocos-de-Concreto.png.png') }}" alt="">
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
                    <img src="{{ asset('assets/Tinta-Plastica-Supercryl-1.png') }}" alt="">
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
                    <img src="{{ asset('assets/tijolo.png') }}" alt="">
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
                    <img src="{{ asset('assets/pladur-n.png') }}" alt="">
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
                    <img src="{{ asset('assets/3-7.png') }}" alt="">
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

@endsection