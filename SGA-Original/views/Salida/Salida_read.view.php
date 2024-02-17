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
	<title>Vista de Salida</title>
</head>


<body>
	<header>
		<a href="?c=menu&a=main">
			<img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
		</a>
	</header>
	<h1>Lista De Salidas</h1>
	<main>
		<tbody>

			<tr class="text-center">
				<div class="container-fluid">
					<div class="table-responsive">
						<table>
							<thead>
								<tr class="text-center roboto-medium">
									<td>CODIGO</td>
									<th>NOMBRE</th>
									<th>MEDIDA</th>
									<th>FECHA DE SALIDA</th>
									<th>CANTIDAD</th>
									<th>OBSERVACION</th>
									<th>TIPO ID</th>
									<th>N° ID</th>
									<th>NOMBRE</th>
									<th>TELEFONO</th>
									<th>DIRECCION</th>
									<th>CORREO</th>

									<th>ACTUALIZAR</th>
									<th>ELIMINAR</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($salidas as $salida): ?>
									<tr class="text-center">
										<td>
											<?php echo $salida->getcodigoS(); ?>
										</td>
										<th>
											<?php echo $salida->getproductoS(); ?>
										</th>
										<th>
											<?php echo $salida->getmedidaS(); ?>
										</th>
										<th>
											<?php echo $salida->getfechaS(); ?>
										</th>
										<th>
											<?php echo $salida->getcantidadS(); ?>
										</th>
										<th>
											<?php echo $salida->gettipoidS(); ?>
										</th>
										<th>
											<?php echo $salida->getnumidS(); ?>
										</th>
										<th>
											<?php echo $salida->getnombresS(); ?>
										</th>
										<th>
											<?php echo $salida->getcelS(); ?>
										</th>
										<th>
											<?php echo $salida->getdireccionS(); ?>
										</th>
										<th>
											<?php echo $salida->getcoreoS(); ?>
										</th>
										<th>
											<?php echo $salida->getobservacionesS(); ?>
										</th>
										<td>


											<a href="?c=Salidas&a=updateSalida&idSalida=<?php echo $salida->getcodigoS(); ?>"
												class="btn-update btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ACTUALIZAR

										</td>

										<td>


											<a href="?c=Salidas&a=deleteSalida&idSalida=<?php echo $salida->getcodigoS(); ?>"
												class="btn-update btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ELIMINAR


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