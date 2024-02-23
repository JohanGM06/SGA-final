<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/estilosreade.css" />
	<!-- 	<link href="assets\css\footer.css" rel="stylesheet">
 -->

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
	<title>Lista de producto</title>
	<!-- 	<h1>Lista De Productos</h1>
 -->
	<h1 class="text-center fs-2 fw-bold text-body-secondary">Lista De productos</h1>

</head>


<body>
	<main>
		<tbody>

			<tr class="text-center ">
				<div class="container-fluid text-body-secondary">

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
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getcodigoEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getproductoEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getmedidaEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getfechaEP(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getcantidadEP(); ?>
										</td>

										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getprecioEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getnombreproveedorEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getnitEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getcelEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getdireccionproveedorEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getcorreoproveedorEP(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $entrada->getobservacionesEP(); ?>
										</td>

										<td>


											<a href="?c=Entradas&a=updateEntrada&idEntrada= <?php echo $entrada->getcodigoEP(); ?>"
												class="btn-update btn-link" style="text-decoration: none;">
												<i></i> &nbsp;ACTUALIZAR
											</a>

										</td>

										<td>
											<a href="#" class="btn-delete btn-link" data-bs-toggle="modal"
												style="text-decoration: none;"
												data-bs-target="#confirmDeleteModal_<?php echo $entrada->getcodigoEP(); ?>">
												<i class="fas fa-trash-alt fa-fw"></i> &nbsp;ELIMINAR
											</a>
										</td>
									</tr>
									<!-- Modal de Confirmación de Eliminación -->
									<div class="modal fade" id="confirmDeleteModal_<?php echo $entrada->getcodigoEP(); ?>"
										data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
										aria-labelledby="confirmDeleteModalLabel_<?php echo $entrada->getcodigoEP(); ?>"
										aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title fs-5"
														id="confirmDeleteModalLabel_<?php echo $entrada->getcodigoEP(); ?>">
														¿Eliminar?</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<p>Una vez realizada la eliminación, no se podrá recuperar la
														información. ¿Está seguro de continuar?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Cancelar</button>
													<a href="?c=Entradas&a=deleteEntrada&idEntrada=<?php echo $entrada->getcodigoEP(); ?>"
														class="btn btn-danger">Eliminar</a>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
	</main>
</body>

</html>