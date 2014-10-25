<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>APPDIRECTORIOTELEFÓNICO</title>
	<link rel="stylesheet" href="/APPDIRECTORIOTELEFONICO/public/css/normalize.css">
	<link rel="stylesheet" href="/APPDIRECTORIOTELEFONICO/public/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/APPDIRECTORIOTELEFONICO/public/css/cssLayout.css">
	<link rel="stylesheet" href="/APPDIRECTORIOTELEFONICO/public/css/cssMenuPrincipal.css">
	<script src="/APPDIRECTORIOTELEFONICO/public/js/prefixfree.min.js"></script>
	<script src="/APPDIRECTORIOTELEFONICO/public/js/jquery-2.1.1.min.js"></script>
	<script src="/APPDIRECTORIOTELEFONICO/public/js/jquery-ui.min.js"></script>

</head>
<body>
	<header>
		<nav id="menuPrincipal">
			<ul>
				<li>
					<img src="/APPDIRECTORIOTELEFONICO/public/img/menuPrincipal/registrarContacto.png" alt="">
					<a href="">Registrar Contacto</a>
				</li>
				<li>
					<img src="/APPDIRECTORIOTELEFONICO/public/img/menuPrincipal/verDirectorio.png" alt="">
					<a href="">Ver Directorio</a>
				</li>
				<li>
					<img src="/APPDIRECTORIOTELEFONICO/public/img/menuPrincipal/reporte.png" alt="">
					<a href="">Imprimir Datos</a>
				</li>
			</ul>
		</nav>
		<div id="appSesion">
			<b>Sesión Iniciada como: </b>Alejandro Castillo
		</div>
	</header>
	<section id="cuerpoGeneral">
		<section id="cuerpoGeneralInterno">
			@yield('cuerpo');
		</section>
	</section>
	<footer>
		
	</footer>
</body>
</html>