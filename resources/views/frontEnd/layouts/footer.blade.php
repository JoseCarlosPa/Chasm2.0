@if ($agent->isDesktop())

<footer class ="">
    <div class="banner_container">
        <div class="row">
            <div class="col-sm-12">
                <div class="index_papel3"><br><br><br></div>
            </div>
        </div>
        <br><br>
        <div class="container_footer">
            <div class="row">
                <div class="col-sm-4">
                    <h5 class="titel_footer">NOSOTROS</h5>
                    <br>
                    <p id="fuente_footer">¡Si quieres formar parte de la familia de Chasm Mochilas, mándanos un correo y
                        nos pondremos en contacto contigo a la brevedad!</p>
                    <form action="send_mail2.php">
                        <input class ="input_footer" type="email" name="mail" placeholder="Correo electronico"><button class="button_send" type="submit">-></button>
                    </form>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="titel_footer">EXPLORA</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{'/'}}#inicio"><li>Inicio</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{'/'}}#nosotros"><li>Nosotros</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a  href ="{{'tienda'}}"><li>Tienda</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <li>Blog</li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href ="{{'contacto'}}"><li>Contacto</li></a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-5">

                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="titel_footer">Nuestros Amgios</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href ="https://www.facebook.com/ValkiriaJuegos/"target="_blank"><li>Valkyria Juegos</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href =""> <li>British Club</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href =""><li>Dragon</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href =""><li>Stargame</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href ="https://www.facebook.com/dungeonsandcoffee/"target="_blank"><li>Dungeons & Coffee</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href ="https://www.facebook.com/WarhammerMonterrey/"target="_blank"><li>Warhammer Monterrey</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href =""><li>Master of War</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href =""><li>La Caravana</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href ="http://www.kallisti.com.mx/"target="_blank"><li>Kallisti</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href ="https://www.facebook.com/coffeeandragons/"target="_blank"><li>Coffee and Dragons</li></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href =""><li>El Reino</li></a>
                        </div>
                        <div class="col-sm-6">
                            <a href =""><li>UpYouGo</li></a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="row">
                <div class="col-sm-12">
                    <p id="terminos"><a href ="{{'/terminos'}}">- Terminos y condiciones - Politicas de privacidad -</a></p>
                </div>
            </div>
        </div>
        <div class ="row">
            <div class ="col-sm-12">
                <div class ="trapecio_footer">
                    <img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" width="90%"
                    height="100%"/>
                </div>
            </div>
        </div>
    </div>
</footer>


</html>

@endif
