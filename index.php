
<?php
require('./include/twitteroauth.php'); // path to twitteroauth library

$consumerkey = 'IfZu2KyFrUENObWRRb4rEQ';
$consumersecret = 'ZOw3Y9BoMpiZaaoqaL1OH3tH3BNHr2YoBQ4IF2JYu4s';
$accesstoken = '56143706-vLAFhrPqgUCVWacD7ANgmrtlfGmn0NEgxCbTryFY2';
$accesstokensecret = '9oIpSdZe1KjDZ2y1vzry6XfdiNhvOE92vWo3tYbQeoBfz';

$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=juan2ramos&count=10');
 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title>Portafolio Juan 2Ramos</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Inicio" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />

        <script src="js/prefixfree.min.js"></script>
        <!-- Estilos -->
        <link rel="stylesheet" href="css/normalize.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css" />


        <!-- Humans -->
        <link type="text/plain" rel="author" href="humans.txt" />

    </head>
    <body>

        <header>
            <nav>
                <a href="#" id="menu"><span class="icon-menu"></span></a>
                <div class="sub-menu">
                    <a href="#"><span class="icon-console"><p>Desarrollo</p></span></a>
                    <a href="#"><span class="icon-brush"><p>Diseño</p></span></a>
                    <a href="#"><span class="icon-stats"><p>Estrategia Digital</p></span></a>
                    <a href="#"><span class="icon-cogs"><p>Método de Trabajo</p></span></a>
                    <a href="#"><span class="icon-wrench"><p>Destrezas</p></span></a>
                    <a href="#"><span class="icon-cabinet"><p>Portafolio</p></span></a>
                    <a href="#"><span class="icon-mug"><p>Donde me ubicas?</p></span></a>
                </div>
            </nav>
            <div id="logo">
                <img src="img/juan2ramos_logo.svg" alt="juan-ramos-logo" />
            </div>            
            <h1>juan<span>Ramos</span></h1>
            <section id="twitter">
                <a href="http://twitter.com/juan2ramos" target="blank">
                    <span class="icon-twitter"></span>
                    <div id="typing">
                        <ul>
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <li><?php echo $tweets[$i]->text; ?></li>
                            <?php endfor; ?> 
                        </ul>
                        <h2></h2>
                    </div>
                    <span class="icon-twitter2"></span>
                </a>
            </section>
            <div id="glasses">                
                <img src="img/glasses.svg" alt="juan-ramos-logo" />
            </div>

        </header>
        <section id="quienSoy">
            <div id="parrafo">
                <p>
                    esto es una prueba
                </p>
                <p>Juan Ramos Diseñador y Desarrollador Web Creativo ?freelance?,  mi experiencia se ha optimizado realizando sitios web con diseños exclusivos y originales, teniendo  como objetivo principal al usuario final; Crear  lugares accesibles, funcionales, con una planeaci&oacute;n y construcci�n que cuenten con las �ltimas tendencias tanto en desarrollo como en dise�o, es el ideal de cada proyecto a emprender.</p>
                <p>Para llevar a cabo cada proyecto cuento con un recurso humano interdisciplinario como  fot�grafos, expertos en medios digitales, ilustradores y comunicadores audiovisuales a fin de ofrecer una verdadera herramienta de negocio. A�adido para pruebas </p>  
                <p>Me apasiona y disfruto con cada proyecto, pongo creatividad e imaginaci&oacute;n, es una nueva oportunidad de aprender y mejorar mis habilidades. </p>
            </div>
        </section>
        <section id="meDedico">

        </section>
        <section id="destrezas">

        </section>
        <section id="portafolio">

        </section>
        <section id="contacto">

        </section>
    </body>
    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
</html>