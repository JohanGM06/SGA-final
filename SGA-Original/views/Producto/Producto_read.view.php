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
	<title>Inventario</title>
</head>


<body>
	<header>
		<a href="?c=menu&a=main">
			<img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
		</a>
	</header>
	<h1>Inventario Total</h1>
	<main>

		<tbody>
			<tr class="text-center">
				<div class="container-fluid">
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
								<?php foreach ($this->model->productoRead() as $p): ?>
									<tr class="text-center">
										<td>
											<?php echo $p->codigo_producto; ?>
										</td>
										<th>
											<?php echo $p->nombre_producto; ?>
										</th>
										<th>
											<?php echo $p->medida_producto; ?>
										</th>
										<th>
											<?php echo $p->nombre_proveedor; ?>
										</th>
										<th>
											<?php echo $p->precio; ?>
										</th>
										<th>
											<?php echo $p->cantidad; ?>
										</th>
										<th>
											<?php echo $p->observaciones_producto; ?>
										</th>





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