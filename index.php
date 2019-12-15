<?php

    session_start();
    session_destroy();

include 'global/config.php';
include 'templates/cabecera_anteslogin.php';
?>
<link href="css/style.css" rel="stylesheet">
<link href="css/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.ico">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />


<!-- Header area -->
<div id="header-wrapper" class="header-slider">
    <header class="clearfix">
        <div class="logo">
            <img src="img/general.png" alt="" width="10%" />
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="main-flexslider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <p class="home-slide-content">
                                    <strong>creativos</strong> pasion
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    diseño<strong>tecnologia</strong>
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    amamos la <strong>simplicidad</strong>
                                </p>
                            </li>

                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>
<!-- spacer section -->
<section class="spacer green">
    <div class="container">
        <div class="row">
            <div class="span6 alignright flyLeft">
                <blockquote class="large">
                    Las cosas no se hacen siguiendo caminos distintos para que no sean iguales, sino para que sean
                    mejores <cite>Elon Musk</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
    <div class="container">
        <h4>¿Quien somos?</h4>
        <div class="row">
            <div class="span4 offset1">
                <div>
                    <h2>Ayudando a las <strong>personas</strong></h2>
                    <p>
                        Este proyecto nace con la finalidad de poder hacer más fácil e incluso divertido el día a día de
                        las personas. Las tecnologías son la herramienta perfecta para automatizar tareas y puede ser
                        empleado como medio en el que apoyarse en el día a día. Tachbot es un proyecto que busca
                        precisamente esto y para ello el equipo pone todo su corazón y dedicación.
                    </p>
                </div>
            </div>
            <div class="span6">
                <div class="aligncenter">
                    <img src="img/icons/creativity.png" alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2 offset1 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/juan.jpg" alt="" />
                    <h3>Juan Pablo Egido</h3>
                    <p>
                        Desarrollo Web
                    </p>
                </div>
            </div>
            <div class="span2 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/rocio.jpg" alt="" />
                    <h3>Rocio Saelices</h3>
                    <p>
                        Diseño UI
                    </p>
                </div>
            </div>
            <div class="span2 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/paloma.jpg" alt="" />
                    <h3>Paloma Sánchez</h3>
                    <p>
                        Desarrollo Web
                    </p>
                </div>
            </div>
            <div class="span2 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/shioato.jpg" alt="" />
                    <h3>Rocio Diéguez</h3>
                    <p>
                        Diseño UI
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
    <div class="container">
        <h4>Servicios</h4>
        <!-- Four columns -->
        <div class="row">
            <div class="col-3">
                <div class="service-box">
                    <img src="img/mayor.png" alt="" width="70%" />
                    <h2>Personas mayores</h2>
                    <p>
                        Incluye aquellas funcionalidades que hacen la vida más fácil a nuestros mayores: recordatorio
                        toma de medicamentos, alarmas, etc.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/general.png" alt="" width="70%" />
                    <h2>Público general</h2>
                    <p>
                        De forma muy cómoda podrá traducir al idioma deseado aquellas palabras/frases que desee. Entre
                        otras funcionalidades.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/joven.png" alt="" width="70%" />
                    <h2>Para los más peques</h2>
                    <p>
                        Seré tu pequeño juguete, podrás configurarme según superes unos niveles e iré progresando con el
                        paso del tiempo.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/ecommerce.png" alt="" width="70%" />
                    <h2>Potencia tu proyecto eCommerce</h2>
                    <p>
                        Utiliza esta maravillosa herramienta para potenciar tu e-commerce.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="works" class="section">
    <div class="container clearfix">
        <h4>Habilidades Chatbot</h4>
        <!-- portfolio filter -->
        <div class="row">
            <div id="filters" class="span12">
                <ul class="clearfix">
                    <li>
                        <a href="#" data-filter="*" class="active">
                            <h5>Cálculo</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".web">
                            <h5>Traductor</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".print">
                            <h5>Agenda</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".design">
                            <h5>Alarma</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".photography">
                            <h5>Ayuda</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END PORTFOLIO FILTERING -->
        </div>
        <div class="row">
            <div class="span12">
                <div id="portfolio-wrap">
                    <!-- portfolio item -->
                    <div class="portfolio-item grid print photography">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/1.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid print design web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/2.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid print design">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/3.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/4.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/5.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/6.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/7.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/8.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid photography web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/9.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item grid design web">
                        <div class="portfolio">
                            <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                <img src="img/works/10.png" alt="" />
                                <div class="portfolio-overlay">
                                    <div class="thumb-info">
                                        <h5>Portfolio name</h5>
                                        <i class="icon-plus icon-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
    <div class="container">
        <div class="row">
            <div class="span12 aligncenter flyLeft">
                <blockquote class="large">
                    Somos una agencia web establecida y confiable con una reputación de compromiso y alta integridad.
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
    <div class="container" align="center">
        <h4>¿Donde nos encontramos?</h4>
        <!-- Three columns -->
        <div id='map' style="width: 600px; height: 400px;">
        </div>
    </div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
    <div class="container">
        <h4>Envíanos un mensaje</h4>
        <p>
            Si hay algo que le haya gustado y desea recibir información no dude en enviarnos un mensaje.
            Si tiene dudas o inquitudes no se lo piense y escríbanos!!.
        </p>
        <div class="blankdivider30">
        </div>
        <div class="row">
            <div class="span12">
                <div class="cform" id="contact-form">
                    <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
                    <div id="errormessage"></div>
                    <form action="controlador/procesacorreo.php" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="span6">
                                <div class="field your-name form-group">
                                    <input type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Nombre" data-rule="minlen:4"
                                        data-msg="Por favor intruzca su nombre" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field your-email form-group">
                                    <input type="text" class="form-control" name="correo" id="correo"
                                        placeholder="Correo" data-rule="email"
                                        data-msg="Por favor introduzca su correo" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field subject form-group">
                                    <input type="text" class="form-control" name="asunto" id="asunto"
                                        placeholder="asunto" data-rule="minlen:4"
                                        data-msg="Por favor introduzca al menos 8 letras" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="field message form-group">
                                    <textarea class="form-control" name="mensaje" rows="5" data-rule="required"
                                        data-msg="Por favor introduzca su mensaje." placeholder="Mensaje"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <input type="submit" value="Enviar mensaje" class="btn btn-theme pull-left">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./span12 -->
        </div>
    </div>
</section>

<?php include 'templates/pie.php';?>

<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localScroll.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/contactform.js"></script>
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>

<!--JS del mapa 'donde estamos', carga el mapa según DOM (id map)-->
<script>
var map = L.map('map').
setView([38.9942400, -1.8564300],
    13);

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);

L.control.scale().addTo(map);
//L.marker([38.9942400, -1.8564300], {draggable: true}).addTo(map);	
L.marker([38.9942400, -1.8564300]).addTo(map).bindPopup("<b>Sede principal Tachbot").openPopup();
</script>


<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 

</body>

</html>