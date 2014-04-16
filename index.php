<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dime Cuba</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/modernizr.js"></script>
</head>
<body>
<!--[if lt IE 7]> <p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p> <![endif]-->
<div id="wrapper">
    
    <?php require "header.php" ?>
    <!-- end header -->

    <section>
        <article>
            <div class="info_sis">
                <h1>SALDO CONGELADO</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue turpis, pellentesque eget suscipit non, elementum nec ligula. Proin semper lorem sed ipsum placerat mollis. Integer quis consequat nisl. Morbi varius tellus sit amet risus tristique, ac porta mi tristique. Aliquam eu adipiscing magna. Phasellus mauris quam</p>
            </div><!-- .info_sis -->
            <div class="content_saldo">
                <h2>tu saldo congelado</h2>
                <span class="saldo">100 <span>USD</span></span>
                <a href="#" title="Consigue más saldo congelado">Consigue más saldo congelado</a>
            </div><!-- .content_saldo -->
        </article><!-- Descripcion del sistema -->

        <article>
            <h2>controla tu red de amigos para descongelar saldo</h2>

            <div id="alertas" class="accordion_tabs">

                <?php require "header_accordion.php" ?>
                <!-- .header_accordion -->

                <div class="body_accordion">
                    
                    <div id="tab_control">
                        <header>
                            <h3>Resumen <span>Des/Congelado</span></h3>
                        </header>
                        
                        <ul>
                            <li><a href="#content_alertas" class="red active"><span>40</span> Alertas <small>60 usd</small></a></li>
                            <li><a href="#amigos_invitados" class="green"><span>20</span> Amigos en tu red <small>-</small></a></li>
                            <li><a href="#pendientes_de_registro" class="red"><span>10</span> Pendientes de registro <small>75 usd</small></a></li>
                            <li><a href="#amigos_registrados" class="green"><span>30</span> Amigos Registrados <small>-</small></a></li>
                            <li><a href="#registrados_sin_ingreso" class="red"><span>15</span> registrados sin ingreso de saldo <small>15 usd</small></a></li>
                            <li><a href="#ingresado_saldo" class="green"><span>10</span> Han ingresado saldo <small>15 usd</small></a></li>
                            <li><a href="#pendiente_de_pago" class="red"><span>8</span> Pendientes de pago mensual. Feb <small>15 usd</small></a></li>
                        </ul>
                    </div><!-- tab_control -->
                    
                    <div id="content_alertas" class="tabs_contents">
                        <?php require "tabs/tab_alertas.php"; ?>
                    </div><!-- ALERTAS -->

                    <div id="amigos_invitados" class="tabs_contents">
                        <?php require "tabs/tab_amigos_invitados.php"; ?>
                    </div><!-- #amigos_invitados -->

                    <div id="pendientes_de_registro" class="tabs_contents">
                        <?php require "tabs/tab_pendientes_registro.php" ?>
                    </div><!-- #pendientes_de_registro -->

                    <div id="amigos_registrados" class="tabs_contents">
                        <?php require "tabs/tab_amigos_registrados.php"; ?>
                    </div><!-- #amigos_registrados -->

                    <div id="registrados_sin_ingreso" class="tabs_contents">
                        <?php require "tabs/tab_registrados_sin_ingreso.php"; ?>
                    </div><!-- #registrados_sin_ingreso -->

                    <div id="ingresado_saldo" class="tabs_contents">
                        <?php require "tabs/tab_ingresado_saldo.php"; ?>
                    </div><!-- #ingresado_saldo -->

                    <div id="pendiente_de_pago" class="tabs_contents">
                        <?php require "tabs/tab_pendiente_de_pago.php"; ?>
                    </div><!-- #pendiente_de_pago -->
                    
                </div><!-- body_accordion -->
            </div><!-- accordion_tabs -->
        </article><!-- accordion tabs -->

        <article>
            <h2>descongela tu saldo con una de las siguientes opciones</h2>


            <div id="tabs_descongelar_saldo">
                
                <ul id="menu_tabs_descongelar">
                    <li class="first_tab">
                        <a href="#invita_amigos" title="Invita amigos">
                            <span class="icon_tab friend"></span> <h3>Invita amigos</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#canjea_guanikikis" title="canjea guanikikis">
                            <span class="icon_tab canjea"></span> <h3>canjea guanikikis</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#canjear_cupon" title="canjea un cupón">
                            <span class="icon_tab cupon"></span> <h3>canjea un cupón</h3>
                        </a>
                    </li>
                </ul>

                <!-- contenidos de los tabs -->
                <div id="invita_amigos">
                    <?php require "tabs/tab_invita_amigos.php" ?>
                </div><!-- #invita_amigos -->
                
                <div id="canjea_guanikikis">
                    <?php require "tabs/tab_canjea_guanikikis.php" ?>
                </div><!-- canjea_guanikikis -->
                
                <div id="canjear_cupon">
                    <?php require "tabs/tab_canjear_cupon.php" ?>
                </div><!-- #canjear_cupon -->

            </div><!-- #tabs_descongelar_saldo -->
        </article>

        <article>
            <h2>consulta el historial de saldo descongelado</h2>

            <div id="accodion_historial">
                
                <?php require "header_accordion_historial.php" ?>    
                
                <div class="body_accordion">
                    <?php require "body_accordion_historial.php"; ?>
                </div>    
            </div><!-- accodion_historial -->
        </article>
    </section>

    <section class="overlay">
        <article class="modal">
            <h2>TU AMIGO HA SIDO INVITADO CON EXITO</h2>
            <p>CUANDO SE REGISTRE<br/> DISFRUTARÁS DE TU SALDO !!!</p>
            <a href="javascript:;" class="button green" title="Aceptar" id="btn_aceptar">Aceptar</a>
        </article>
    </section>

</div><!-- #wrapper -->
<!-- SCRIPTS -->
<script type="text/javascript" src="scripts/jquery-1.10.2.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="scripts/funciones.js"></script>
<!-- GA -->

</body>
</html>