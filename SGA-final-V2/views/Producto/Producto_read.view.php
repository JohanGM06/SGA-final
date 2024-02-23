<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 	<link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
 -->
	<link rel="stylesheet" href="assets/css/estilosreade.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
	<title>Inventario</title>

	<h1 class="text-center fs-2 fw-bold text-body-secondary">Inventario Total</h1>
</head>

<body>

	<main>
		<tbody>
			<tr class="text-center">
				<div class="container-fluid text-body-secondary">
					<div class="table-responsive">
						<table>
							<thead>
								<tr class="text-center roboto-medium">
									<td>CODIGO DE PRODUCTO</td>
									<th>NOMBRE</th>
									<th>MEDIDA</th>
									<th>CANTIDAD</th>
									<th>PRECIO</th>
									<th>PROVEEDOR</th>
									<th>OBSERVACIONES</th>


								</tr>
							</thead>
							<tbody>
								<?php foreach ($productos as $producto): ?>
									<tr class="text-center">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getcodigoP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getproductoP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getmedidaP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getnombreproveedorP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getprecioP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getcantidadP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $producto->getobservacionesP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">





									</tr>

								</tbody>
							<?php endforeach; ?>

						</table>

					</div>
			</tr>

		</tbody>
	</main>
</body>

</html>