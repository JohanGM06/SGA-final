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
								<?php foreach ($this->model->obtener() as $e): ?>
									<tr class="text-center">
										<th>
											<?php echo $e->nombre_producto; ?>
										</th>
										<th>
											<?php echo $e->medida_producto; ?>
										</th>
										<th>
											<?php echo $e->fecha_compra; ?>
										</th>
										<th>
											<?php echo $e->cantidad; ?>
										</th>

										<th>
											<?php echo $e->precio; ?>
										</th>
										<th>
											<?php echo $e->nombre_proveedor; ?>
										</th>
										<th>
											<?php echo $e->nit; ?>
										</th>
										<th>
											<?php echo $e->telefono_proveedor; ?>
										</th>
										<th>
											<?php echo $e->direccion_proveedor; ?>
										</th>
										<th>
											<?php echo $e->correo_proveedor; ?>
										</th>
										<th>
											<?php echo $e->observaciones_entrada; ?>
										</th>

										<td>


											<a href="?c=Entradas&a=updateEntrada&idEntrada=<?php echo $e->codigo_entrada; ?>"
												class="btn-update btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ACTUALIZAR
											</a>

										</td>

										<td>


											<a href="?c=Entradas&a=deleteEntrada&idEntrada=<?php echo $e->codigo_entrada; ?>"
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