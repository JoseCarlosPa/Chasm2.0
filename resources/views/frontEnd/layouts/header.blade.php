@if((new \Jenssegers\Agent\Agent())->isDesktop())

    <div class="fixed-top">
        <div id="trapezoid">
            <div class="row ">
                <div class="col-sm-2 text-center">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/Logo.png')}}" alt="" width="90%"
                                                    height="100%"/></a>
                    </div>
                </div>
                <div class="col-sm-10 ">

                    <div class="row ">
                        <div class="col-sm-9 align-items-center">
                            <div class="row">
                                <div class="col-sm-12 bienvenidos_margen">
                                    <p>Bienvenido al juego</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-3 ">
                            <div class="row ">
                                <div class="col-sm-4 puerta_margen">
                                    <p><img src="{{asset('frontEnd/images/home/dungeon.png')}}" alt="" width="110%"
                                            height="100%"/></p>
                                </div>
                                <ul class="nav navbar-nav">
                                    <br>
                                    <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Carrito</a>
                                    </li>
                                    @if(Auth::check())
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Cerrar Sesion </a>
                                        </li>
                                    @else
                                        <li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                                                    class="fa fa-lock"></i> Iniciar sesion</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-9">

                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="{{'/'}}#inicio" class="font_header"><p>Inicio</p></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{'/'}}#nosotros" class="font_header"><p>Nosotros</p></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{'/tienda'}}" class="font_header"><p>Tienda</p></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://mochilaschasm.com/blog" class="font_header"><p>Blog</p></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{'/contacto'}}" class="font_header"><p>Contacto</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center imgs_redes">
                            <a href="https://www.facebook.com/chasmmochilas" target="_blank"><img
                                    src="{{asset('frontEnd/images/home/facebook1.svg')}}" alt="" width="20%"
                                    height="100%"/></a>
                            <a href="https://www.instagram.com/mochilaschasm/" target="_blank"><img
                                    src="{{asset('frontEnd/images/home/insta.svg')}}" alt="" width="20%" height="100%"/></a>
                            <a href="https://twitter.com/MochilasChasm" target="_blank"><img
                                    src="{{asset('frontEnd/images/home/tweeter.svg')}}" alt="" width="20%"
                                    height="100%"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-12">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 "> <!--Columnas-->
                        <div class="row alineacion_modal">
                            <div class="col-sm-12 alineacion_modal">
                                <p style="font-size: 120% ; font-weight: bold">Iniciar Sesión</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12 alineacion_modal">
                                <form method="post" action="{{route('login')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="email" aria-describedby="nombre" placeholder="Correo electronico">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="password" aria-describedby="password" placeholder="Contraseña">
                                    </div>
                                    <span>
                                    <input type="checkbox" class="checkbox">
                                    Mantener sesion activa
                                </span>
                                    <br><br>
                                    <button class="button_modal" type="submit" name="submit">Iniciar Sesion</button>
                                    <br><br>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 "> <!--Columnas-->
                        <div class="row alineacion_modal">
                            <div class="col-sm-12 alineacion_modal">
                                <p style="font-size: 120% ; font-weight: bold">Registro</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12 alineacion_modal">
                                <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="nombre_r" aria-describedby="nombre" placeholder="Nombre completo">
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="email_r" aria-describedby="email" placeholder="Correo electornico">
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" value="{{old('password')}}"
                                               class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="password_r" aria-describedby="password" placeholder="Contraseña">
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation"
                                               value="{{old('password_confirmation')}}" class="form-control"
                                               style="width: 15em;text-align: left"
                                               id="password_r" aria-describedby="password"
                                               placeholder="Confirmar Contraseña">
                                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                                    </div>
                                    <button class="button_modal" type="submit" name="submit">Registrar</button>
                                    <br><br>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!--Fin de columna-->
                </div>

            </div>
        </div>
        <br>
    </div>
    </header><!--/header-->

@endif
<!-----------------------------------Vista de mobil --------------------------->
@if((new \Jenssegers\Agent\Agent())->isMobile())
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="row">
            <div class="col-sm-12">
                <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" width="40%"
                                            height="100%" style="padding-right: 15%;"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <img src="{{asset('frontEnd/images/home/dungeon.png')}}" alt="" width="28%"
                     height="50%" style="padding-left: 15%;"/>

            </div>
        </div>
        <div class ="row">
            <div class ="col-sm-12">
                <a href="https://www.facebook.com/chasmmochilas" target="_blank"><img
                        src="{{asset('frontEnd/images/home/facebook1.svg')}}" alt="" width="20%"
                        height="100%" /></a>
                <a href="https://www.instagram.com/mochilaschasm/" target="_blank"><img
                        src="{{asset('frontEnd/images/home/insta.svg')}}" alt="" width="20%" height="100%"/></a>
                <a href="https://twitter.com/MochilasChasm" target="_blank"><img
                        src="{{asset('frontEnd/images/home/tweeter.svg')}}" alt="" width="20%"
                        height="100%"/></a>
            </div>
        </div>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{'/'}}#inicio">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/'}}#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{'/tienda'}}">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://mochilaschasm.com/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{'/contacto'}}">Contacto</a>
                </li>
                @if(Auth::check())
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Cerrar Sesion </a>
                    </li>
                @else
                    <li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                                class="fa fa-lock"></i> Iniciar sesion</a></li>
                @endif
            </ul>

        </div>
    </nav>
@endif


