<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/estilos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
	<title>Menú Principal</title>
</head>

<body>
	<main>
		<div class="container0">
			<!-- Inicio del encabezado -->
			<header>
				<a href="?c=menu&a=main">
					<img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
				</a>
			</header>
			<!-- Fin del encabezado -->

			<!-- Inicio del contenido -->
			<nav id="productos">


				<a href="?c=Entradas&a=createEntrada" class="boton">
					<div>
						<p class="text">Entrada De Producto</p>
					</div>
				</a>
				<a href="?c=Entradas&a=main" class="boton">
					<div>
						<p class="text">Lista De Productos</p>
					</div>
				</a>



				<a href="?c=Salidas&a=createSalida" class="boton"> <!-- Agregado el class 'boton' -->
					<div>
						<p class="text">Crear Salida</p>
					</div>
				</a>

				<a href="?c=Salidas&a=main" class="boton">
					<div>
						<p class="text">Lista De salidas</p>
					</div>
				</a>
				<a href="?c=Productos&a=main" class="boton">
					<div>
						<p class="text">Inventario</p>
					</div>
				</a>
			</nav>
			<!-- Footer inicio -->
			<footer></footer>
		</div>
	</main>
	<!-- Fin del contenido -->
</body>

</html>