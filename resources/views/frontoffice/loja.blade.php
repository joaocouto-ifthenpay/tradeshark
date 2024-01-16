@extends('layouts.frontoffice')

@section('content')

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

            @foreach ($items as $item)
            <div class="product-card">
                <div class="product-tumb">
                    <img src="assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Obras</span>
                    <h4><a href="">{{ $item->item_name }}</a></h4>
                    <p>{{ Str::limit($item->description, 25) }}</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>2.560€</small>{{ $item->price }}</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

{{-- 
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
            </div> --}}
        </div>

        <!-- ......... -->
        <!-- Paginação -->
        <!-- ......... -->
        <div class="pagination-container">
            <div class="pagination">
                {{ $items->links('custom.pagination') }}
            </div>
        </div>


        <!-- ......... -->
        <!-- Novidades -->
        <!-- ......... -->
        <h1 class="product-card_tit">Novidades</h1>
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


@endsection