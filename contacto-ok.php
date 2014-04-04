<?php
						if(isset($_POST['nombre']) && isset($_POST['empresa'])  && isset($_POST['email'])  && isset($_POST['telefono']) && isset($_POST['producto']))
						{						
							$nombre = $_POST['nombre'];							
							$empresa = $_POST['empresa'];
							$email = $_POST['email'];
							$telefono = $_POST['telefono'];
							$producto = $_POST['producto'];
							//echo $producto . "<br />" . $empresa . "<br />" . $email . "<br />" . $telefono . "<br />" . $nombre;


		try

		{
//echo $producto . "<br />" . $empresa . "<br />" . $email . "<br />" . $telefono . "<br />" . $nombre;
			$servicio="http://aplicaciones.t2o.es/MicrositesWebService/MicrositesGestor.asmx?wsdl";

			$parametros="nombre;".$nombre."|empresa;".$empresa."|telefono;".$telefono."|email;".$email."|producto;".$producto;

			$micro="T2OMediaMobile";

			$client=new SoapClient($servicio);

			$result=$client->InsertaDatosPHP(array("tabla"=>$micro,"origen"=>"","PaginaProcedencia"=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ,"variables"=>$parametros));
			//echo "ok";
			$correctoInsercion = "ok";
			
			
			$servicioInsert="http://aplicaciones.t2o.es/WSNewsletter/Usuarios.asmx?wsdl";
			$clientInsert=new SoapClient($servicioInsert);
			$resultInsert=$clientInsert->InsertaUsuario(array("email"=>$email,"nombre"=>$nombre, "empresa"=>$empresa, "telefono"=>$telefono));
		}

		catch (Exception $e) {

		}
}	
?>
<!doctype html><!--[if IEMobile 7 ]>    <html class="no-js iem7" lang="en"> <![endif]--><!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<html>
	<head>
		<base href="http://m.t2o.es"/>
		<meta charset="utf-8">
		<title>Gracias por ponerte en contacto con T2O media</title>
		<meta name="description" content="Gracias por ponerte en contacto con T2O media" />
		<meta name="keywords" content="gracias contacto" />
		<link rel="canonical" href="http://m.t2o.es/contacto-ok.html" />
		<meta name="robots" content="noindex" />
		<!-- Mobile Viewport-->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<!-- Home Screen Icons  -->
		<!-- For iPhone 4 - Retina display -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/h/apple-touch-icon.png">
		<!-- For first-generation iPad -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/m/apple-touch-icon.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ -->
		<link rel="apple-touch-icon-precomposed" href="/img/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia devices -->
		<link rel="shortcut icon" href="/img/l/apple-touch-icon.png">
		<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
		<meta http-equiv="cleartype" content="on">
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<script src="/js/libs/modernizr-2.0.6.min.js"></script>
		<link href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js" ></script>
		<script>
            $(document).live("mobileinit", function(){
                $.mobile.ajaxLinksEnabled = false;
                $.mobile.ajaxEnabled = false;
            });        
        </script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>	
		<link rel="stylesheet" href="/css/style.css">
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TJNRKT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TJNRKT');</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div id="container" data-role="page" data-theme="e">
			<div class="toolbar">
				<div class="submenu">
					<div class="item">
						<a onClick="ga('send', 'event', 'Iconos Cabecera', 'Contacto OK', 'Telefono');" title="tel&eacute;fono t2o media" href="tel:+34915358066"><img width="32" height="32" src="/img/telefono.png" alt="Tel&eacute;fono +3491535806" /></a>
					</div>
					<div class="item">
						<a onClick="ga('send', 'event', 'Iconos Cabecera', 'Contacto OK', 'Contacto');" title="contacto t2o media" href="/contacto-t2o.php"><img width="32" height="32" src="/img/email.png" alt="Contacto" /></a>
					</div>
					<div class="item">
						<a onClick="ga('send', 'event', 'Iconos Cabecera', 'Contacto OK', 'Mapa');" title="mapa ubicaci&oacute;n t2o media Espa&ntilde;a" href="http://maps.google.es/maps?q=Calle+del+General+Ramirez+de+Madrid+8,+28020,+Madrid,+T2O+media"><img width="32" height="32" src="/img/ubicacion-t2o.png" alt="mapa sede t2o media espa&ntilde;a" /></a>
					</div>
				</div>
			</div>
			<div id="logo">
				<a title="agencia de marketing online" href="/"><img width="220" height="70" src="/img/bottom-logo.png" alt="T2O media M&oacute;vil" /></a>
			</div>
			<nav class="navigation">
				<div id="menuButton"><a href="#" rel=".toggleDiv" class="show_hide" data-role="button" data-theme="g" >Menu</a></div>
				<div class="menu toggleDiv no-show" id="slidingDiv">
					<div class="item">
						<a onClick="ga('send', 'event', 'Menu', 'Contacto OK', 'SEO');" title="posicionamiento web" href="/seo.html" data-role="button" data-theme="g">SEO</a>
					</div>
					<div class="item">
						<a onClick="ga('send', 'event', 'Menu', 'Contacto OK', 'SEM');" title="campa&ntilde;as en buscadores" href="/sem.html" data-role="button" data-theme="g">SEM</a>
					</div>
					<div class="item">
						<a onClick="ga('send', 'event', 'Menu', 'Contacto OK', 'SMM');" title="redes sociales" href="/social-media-smm.html" data-role="button" data-theme="g">SMM</a>
					</div>
					<div class="item">
						<a onClick="ga('send', 'event', 'Menu', 'Contacto OK', 'Performance');" title="performance marketing" href="/performance.html" data-role="button" data-theme="g">PERFORMANCE</a>
					</div>
				</div>
			</nav>
			<div id="main" role="main">
				<header>
					<h1>Gracias por tu mensaje</h1>
				</header>
				<section>
					<div class="ui-bar-c ui-corner-all ui-shadow m05em">
						<p style="text-align:center;">Hemos recibido tu mensaje y en breve nos pondremos en contacto contigo.</p>
						<p style="text-align:center;">Te recordamos que tambi&eacute;n puedes ponerte en contacto con nosotros llamando al: 
						<p class="telefono-ok"><a style="color: #00759B;font-size: 14pt;font-weight: bold;line-height: 120%;text-decoration:underlined;" href="tel:+34915358066">91 535 80 66</a></p>
						<p style="text-align:center;">En donde podr&aacute;s hablar con nuestro equipo comercial.</p>
					</div>
				</section>
				<aside>
					<h2>Encu&eacute;ntranos en las Redes Sociales</h2>
					<div data-role="footer" data-theme="g">
						<div class="socialmedia ui-corner-all">
							<div class="ui-grid-c">
								<div class="ui-block-a socialicon"><a onClick="ga('send', 'event', 'Iconos Sociales', 'Contacto OK', 'Twitter');" href="http://twitter.com/t2omedia"><img alt="icono twitter" width="48" height="48" src="/img/icono-twitter.png" /></a></div>
								<div class="ui-block-b socialicon"><a onClick="ga('send', 'event', 'Iconos Sociales', 'Contacto OK', 'Facebook');" href="http://www.facebook.com/t2omedia"><img alt="icono facebook" width="48" height="48" src="/img/icono-facebook.png" /></a></div>
								<div class="ui-block-c socialicon"><a onClick="ga('send', 'event', 'Iconos Sociales', 'Contacto OK', 'Linkedin');" href="http://www.linkedin.com/companies/t2o-media"><img alt="icono linkedin" width="48" height="48" src="/img/icono-linkedin.png" /></a></div>
								<div class="ui-block-d socialicon"><a onClick="ga('send', 'event', 'Iconos Sociales', 'Contacto OK', 'Google Plus');" href="https://plus.google.com/111654595972678842850"><img alt="icono google plus" width="48" height="48" src="/img/icono-google-plus.png" /></a></div>
							</div>
						</div>
					</div>
				</aside>
				<nav>
					<div class="menuFooter">
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'Home');" href="/" >inicio</a></div>
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'SEO');" href="/seo.html">seo</a></div>
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'SEM');" href="/sem.html">sem</a></div>
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'SMM');" href="/social-media-smm.html">smm</a></div>
						<div class="itemFooter" id="last"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'Performance');" href="/performance.html">performance</a></div>
					</div>
					<div class="menuFooter">
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'Sobre T2O');" href="/sobre-t2o.html">sobre t2o</a></div>
						<div class="itemFooter"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'Clientes');" href="/sobre-t2o/clientes.html">clientes</a></div>
						<div class="itemFooter" id="last"><a onClick="ga('send', 'event', 'Links', 'Contacto OK', 'Sedes');" href="/sobre-t2o/sedes-internacionales.html">sedes</a></div>
					</div>
				</nav>
				<footer itemscope itemtype="http://schema.org/LocalBusiness" class="contacto-pie" >
					<ul class="ui-li">
						<a onClick="ga('send', 'event', 'Iconos Pie', 'Contacto OK', 'Telefono');" href="tel:+34915358066"><li itemprop="telephone" id="phone">91 535 8066</li></a>
						<a onClick="ga('send', 'event', 'Iconos Pie', 'Contacto OK', 'Contacto');" href="/contacto-t2o.php"><li id="email">Cont&aacute;ctanos</li></a>
						<a onClick="ga('send', 'event', 'Iconos Pie', 'Contacto OK', 'Mapa');" href="http://maps.google.es/maps?q=Calle+del+General+Ramirez+de+Madrid+8,+28020,+Madrid,+T2O+media"><li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" id="map"><span itemprop="streetAddress">Calle del General Ram&iacute;rez de Madrid 8</span>, <span itemprop="postalCode">28020</span>, <span itemprop="addressLocality">Madrid</span>, <span itemprop="addressCountry">Espa&ntilde;a</span></li></a>
						<a onClick="ga('send', 'event', 'Iconos Pie', 'Contacto OK', 'Newsletter');" href="/newsletter.php"><li id="newsletter">Suscr&iacute;bete a nuestra newsletter</li></a>
						<a onClick="ga('send', 'event', 'Iconos Pie', 'Contacto OK', 'Version Completa');" href="http://www.t2o.es/"><li id="desktop">Versi&oacute;n web completa</li></a>
					</ul>
				</footer>
			</div>
		</div>	
		<!--! end of #container -->
		<!-- JavaScript at the bottom for fast page loading -->
		<script src="/js/app.js"></script>
		<script src="/js/helper.js"></script>	
	</body>
</html>