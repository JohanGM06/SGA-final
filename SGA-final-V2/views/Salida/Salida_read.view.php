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
	<title>Salidas</title>

	<h1 class="text-center fs-2 fw-bold text-body-secondary">Lista De Salidas</h1>
</head>


<body>
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
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getcodigoS(); ?>
										</td>
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getproductoS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getmedidaS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getfechaS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getcantidadS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->gettipoidS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getnumidS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getnombresS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getcelS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getdireccionS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getcoreoS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
											<?php echo $salida->getobservacionesS(); ?>
										</td class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">
										<td>


											<a href="?c=Salidas&a=updateSalida&idSalida=<?php echo $salida->getcodigoS(); ?>"
												class="btn-update btn-link">
												<i class="fas fa-plus fa-fw"></i> &nbsp;ACTUALIZAR

										</td>

										<td>



											<a href="#" class="btn-delete btn-link" data-bs-toggle="modal"
												data-bs-target="#confirmDeleteModal_<?php echo $salida->getcodigoS(); ?>"
												style="text-decoration: none;">
												<i class="fas fa-trash-alt fa-fw"></i> &nbsp;ELIMINAR
											</a>






										</td>
									</tr>

									<div class="modal fade" id="confirmDeleteModal_<?php echo $salida->getcodigoS(); ?>"
										data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
										aria-labelledby="confirmDeleteModalLabel_<?php echo $salida->getcodigoS(); ?>"
										aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title fs-5"
														id="confirmDeleteModalLabel_<?php echo $salida->getcodigoS(); ?>">
														Confirmar eliminación</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<p>Una vez eliminada la salida, esta acción no se puede deshacer. ¿Está
														seguro de continuar?
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Cancelar</button>
													<a href="?c=Salidas&a=deleteSalida&idSalida=<?php echo $salida->getcodigoS(); ?>"
														class="btn btn-primary">Eliminar</a>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</tr>
		</tbody>
	</main>
</body>
<footer></footer>

</html>