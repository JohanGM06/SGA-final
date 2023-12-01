<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/estilosreade.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
	<title>Vista de producto</title>
</head>

<body>

	<header>
		<a href="?c=menu&a=main">
			<img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
		</a>

	</header>
	<h1>Lista De Productos</h1>
	<main>
		<tbody>

			<tr class="text-center">
				<div class="container-fluid">
					<div class="table-responsive">
						<table>
							<thead>
								<tr class="text-center roboto-medium">
									<td>CODIGO DE ENTRADA</td>
									<th>NOMBRE</th>
									<th>MEDIDA</th>
									<th>FECHA DE INGRESO</th>
									<th>CANTIDAD</th>
									<th>PRECIO</th>
									<th>PROVEEDOR</th>
									<th>NIT</th>
									<th>TELEFONO</th>
									<th>DIRECCION</th>
									<th>CORREO</th>
									<th>OBSERVACIONES</th>

									<th>ACTUALIZAR</th>
									<th>ELIMINAR</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($entradas as $entrada): ?>
									<tr class="text-center">
										<td>
											<?php echo $entrada->getcodigoEP(); ?>
										</td>
										<th>
											<?php echo $entrada->getproductoEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getmedidaEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getfechaEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getcantidadEP(); ?>
										</th>

										<th>
											<?php echo $entrada->getprecioEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getnombreproveedorEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getnitEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getcelEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getdireccionproveedorEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getcorreoproveedorEP(); ?>
										</th>
										<th>
											<?php echo $entrada->getobservacionesEP(); ?>
										</th>

										<td>


											<a href="?c=Entradas&a=updateEntrada&idEntrada=<?php echo $entrada->getcodigoEP(); ?>"
												class="btn-update btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ACTUALIZAR
											</a>

										</td>

										<td>


											<a href="?c=Entradas&a=deleteEntrada&idEntrada=<?php echo $entrada->getcodigoEP(); ?>"
												class="btn-delete btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ELIMINAR
											</a>

										</td>
									</tr>

								</tbody>
							<?php endforeach; ?>

						</table>

					</div>
			</tr>

		</tbody>

	</main>

</body>
<footer></footer>

</html>