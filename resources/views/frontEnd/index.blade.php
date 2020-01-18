@extends('frontEnd.layouts.master')
@section('title','CHASM')
@section('slider')
@endsection
@section('content')

    @if((new \Jenssegers\Agent\Agent())->isDesktop())
        <div id="inicio"></div>
        <div class="banner_container">
            <!--Contenedor para banners-->
            <div id="header_banner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header_banner" data-slide-to="0" class="active"></li>
                    <li data-target="#header_banner" data-slide-to="1"></li>
                    <li data-target="#header_banner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas1.jpg')}}"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas2.jpg')}}"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas3.jpg')}}"
                             alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header_banner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#header_banner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

            <!--Background de papel-->
        </div>
        <div id="nosotros"></div>
        <br><br><br><br><br><br><br>
        <!--Titulo de "Nosotros"-->

        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">NOSOTROS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">-</h1>
            </div>
        </div>
        <!--Contenedor que limita los margenes en deracha e izquerda en un 15%-->
        <div class="container_index">
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('frontEnd/images/home/drake.png')}}" width="90%" height="70%">
                </div>
                <div class="col-sm-8">
                    <p id="fuente_bienvenidos">¡Bienvenidos al sitio web de Productos Chasm!
                        <br><br>Diseñados por jugadores, para jugadores, productos de la marca Chasm ofrecen lo mejor en
                        diseño
                        y funcionalidad para proteger y transportar las cosas que a ti te importan.
                        <br><br>Los juegos son eventos sociales. Llevamos nuestros juegos con nosotros a nuestras
                        reuniones y es
                        importante protegerlos.
                        <br><br>Tupperware, cajas de herramientas o cajas de zapatos simplemente no son la mejor forma
                        para
                        transportar tus juegos.
                        <br><br> Productos Chasm brindan soluciones para proteger y transportar tus producto con
                        seguridad y con
                        personalidad.
                        <br><br>Nuestros productos están orgullosamente hechos en México con mano de obra calificada.
                        <br><br>Busca entre nuestros productos la solución ideal para tus necesidades.</p>
                </div>
            </div>
            <br><br><br>
            <!--Seccion para la tienda-->
            <div class="row">
                <div class="col-sm-12">
                    <h1 id="title">TIENDA</h1>
                </div>
                <div class="col-sm-12">
                    <h1 id="title">-</h1>
                </div>
            </div>

            <!--Inicio de Tienda-->
            <div class="row margin_tienda2">
                <div class="col-sm-4">
                    <a href="{{'/tienda'}}" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem; height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/1.JPG')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Mochila A1</h5>

                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $1850.00
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem;height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/2.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">	Aristeia! Dice Pack</h5>
                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $250.00
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{'/tienda'}}" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem;height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/3.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Wildfire (de Infinity)</h5>

                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $960.00
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!--Segunda linea de Tienda-->
            <br><br><br>
            <div class="row margin_tienda2">
                <div class="col-sm-4">
                    <a href="{{'/tienda'}}" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem;height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/4.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Bolsa de dados</h5>
                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $299.00
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem;height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/5.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">T2</h5>
                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $400.00
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{'/tienda'}}" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem;height: 25rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/6.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">1 Bolsa de Dados</h5>
                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $120.00
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!--Fin de muestra de tienda-->
            <br><br><br>


            <!--Boton de "IR a la tienda"-->
            <div class="row">
                <div class="col-sm-12 text-center align-middle ">
                    <a href="{{'/tienda'}}" class="links_tienda">
                        <div id="trapezoid2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 id="irtienda">IR A LA TIENDA</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <!--Seccion para marcas patrocinadoras-->
        <div class="header_container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="index_papel3"><br><br><br></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <a href="http://www.infinitythegame.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/corvus.svg')}}" width="100%" height="100%"></a>
                </div>
                <div class="col-sm-2">
                    <a href="http://www.aristeiathegame.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/aristei.png')}}" width="100%" height="100%"></a>
                </div>
                <div class="col-sm-2">
                    <a href="http://www.modiphius.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/modifus.png')}}" width="100%" height="100%"></a>
                </div>
                <div class="col-sm-2">
                    <a href="http://www.nosolorol.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/nosolor.png')}}" width="100%" height="100%"></a>
                </div>
                <div class="col-sm-2">
                    <a href="http://www.siriusdice.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/sirius.png')}}" width="100%" height="100%"></a>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="index_papel2"><br><br><br><br><br></div>
                </div>
            </div>
        </div>
        <!--Seccion del Blog-->
        <br><br><br><br>
        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">ÚLTIMOS BLOGS POST</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">-</h1>
            </div>
        </div>

        <br><br><br>
        <div class="container_index">
            <div class="row margin_tienda2">
                <div class="col-sm-6">
                    <div class="contenedor_imagen zoom">
                        <a href="https://mochilaschasm.com/blog/2019/11/04/nuevo-sitio/" target="_blank"><img src="{{asset('frontEnd/images/blogs/1.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contenedor_imagen zoom">
                        <a href="https://mochilaschasm.com/blog/2019/12/05/queretarol/" target="_blank"><img src="{{asset('frontEnd/images/blogs/2.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row margin_tienda2">
                <div class="col-sm-6">
                    <div class="contenedor_imagen zoom">
                        <a href="https://mochilaschasm.com/blog/2019/12/10/es-genial-ahora-por-que-dungeons-dragons-esta-lanzando-su-hechizo-nuevamente/" target="_blank"><img src="{{asset('frontEnd/images/blogs/3.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contenedor_imagen zoom">
                        <a href="https://mochilaschasm.com/blog/2019/12/10/queretaro-nocturno/" target="_blank"><img src="{{asset('frontEnd/images/blogs/4.png')}}" width="100%" height="100%"></a>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    @endif
    @if((new \Jenssegers\Agent\Agent())->isMobile())
        <br><br><br><br><br>
        <div id="inicio"></div>
        <div class="banner_container">
            <!--Contenedor para banners-->
            <div id="header_banner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header_banner" data-slide-to="0" class="active"></li>
                    <li data-target="#header_banner" data-slide-to="1"></li>
                    <li data-target="#header_banner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas1.jpg')}}"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas2.jpg')}}"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('frontEnd/images/banners/mochilas3.jpg')}}"
                             alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header_banner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#header_banner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

            <!--Background de papel-->
        </div>

        <div id="nosotros"></div>
        <br><br><br>
        <!--Titulo de "Nosotros"-->

        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">NOSOTROS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">-</h1>
            </div>
        </div>
        <!--Contenedor que limita los margenes en deracha e izquerda en un 15%-->
        <div class="container_index">
            <br>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p id="fuente_bienvenidos">¡Bienvenidos al sitio web de Productos Chasm!
                        <br><br>Diseñados por jugadores,
                        para jugadores, productos de la marca Chasm ofrecen lo mejor en diseño y funcionalidad para
                        proteger y transportar las cosas que a ti te importan.

                        <br><br>Los juegos son eventos sociales. Llevamos
                        nuestros juegos con nosotros a nuestras reuniones y es importante protegerlos.
                        <br><br>Tupperware, cajas
                        de herramientas o cajas de zapatos simplemente no son la mejor forma para transportar tus
                        juegos.
                        <br><br>Productos Chasm brindan soluciones para proteger y transportar tus producto con
                        seguridad y con personalidad.
                        <br><br>Nuestros productos están orgullosamente hechos en México con mano
                        de obra calificada.
                        <br><br>Busca entre nuestros productos la solución ideal para tus necesidades.
                </div>
                <div class="col-sm-12 text-center">
                    <p><img src="{{asset('frontEnd/images/home/drake.png')}}" width="90%" height="90%"></p>
                </div>
            </div>
            <br><br><br>
            <!--Seccion para la tienda-->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 id="title_m">TIENDA</h1>
                </div>
            </div>
            <br><br>

            <!--Inicio de Tienda-->
            <div class="row margin_tienda2_mobil">
                <div class="col-sm-12">
                    <a href="{{'/tienda'}}" class="links_cards">
                        <div class="card card_shadow" style="width: 18rem; height: 35rem;">
                            <div class="trapezoid3 "><p style="margin-top: 10%">Comprar</p></div>
                            <img class="card-img-top" src="{{asset('frontEnd/imgs/miniaturas/1.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">UNIDAD ARJUNA</h5>
                                <p class="card-text">Las tropas Arjuna son ideales para controlar de cerca la mesa de
                                    juego,
                                    aprovechar su Kiranbot sincronizado y poder aprovechar...</p>
                                <img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" width="20%" height="20%">
                                $299.00
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--Fin de muestra de tienda-->
            <br><br><br>


            <!--Boton de "IR a la tienda"-->
            <div class="row">
                <div class="col-sm-12 text-center align-middle ">
                    <a href="{{'/tienda'}}" class="links_tienda">
                        <div id="trapezoid4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 id="irtienda_m">IR A LA TIENDA</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <!--Seccion para marcas patrocinadoras-->
        <div class="header_container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="index_papel3"><br><br><br></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <a href="http://www.infinitythegame.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/corvus.svg')}}" width="50%" height="50%"></a>
                    <a href="http://www.aristeiathegame.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/aristei.png')}}" width="40%" height="60%"></a>
                </div>
                <div class="col-sm-2 text-center">
                    <p><a href="http://www.modiphius.com" target="_blank"><img
                                src="{{asset('frontEnd/images/home/modifus.png')}}" width="50%" height="50%"></a></p>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="http://www.nosolorol.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/nosolor.png')}}" width="40%" height="70%"></a>
                    <a href="http://www.siriusdice.com" target="_blank"><img
                            src="{{asset('frontEnd/images/home/sirius.png')}}" width="40%" height="70%"></a>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <!--Seccion del Blog-->
        <br><br><br><br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 id="title">ÚLTIMOS BLOGS POST</h1>
            </div>
        </div>
        <br><br>
        <div class="container_index">
            <div class="row margin_tienda2_mobil">
                <div class="col-sm-12">
                    <div class="contenedor_imagen ">
                        <a href ="https://mochilaschasm.com/blog/2019/11/04/nuevo-sitio/"><img src="{{asset('frontEnd/images/blogs/1.png')}}" width="100%" height="100%"></a>

                    </div>
                </div>
            </div>
            <br><br>
            <div class="row margin_tienda2_mobil">
                <div class="col-sm-12">
                    <div class="contenedor_imagen ">
                        <a href ="https://mochilaschasm.com/blog/2019/12/05/queretarol/"><img src="{{asset('frontEnd/images/blogs/2.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row margin_tienda2_mobil">
                <div class="col-sm-12">
                    <div class="contenedor_imagen ">
                        <a href ="https://mochilaschasm.com/blog/2019/12/10/es-genial-ahora-por-que-dungeons-dragons-esta-lanzando-su-hechizo-nuevamente/"><img src="{{asset('frontEnd/images/blogs/3.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row margin_tienda2_mobil">
                <div class="col-sm-12">
                    <div class="contenedor_imagen ">
                        <a href ="https://mochilaschasm.com/blog/2019/12/10/queretaro-nocturno/"><img src="{{asset('frontEnd/images/blogs/4.png')}}" width="100%" height="100%"></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    @endif
@endsection
