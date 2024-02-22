<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/update.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <title>Actualización</title>
</head>

<body>

    <header>
        <a href="?c=menu&a=main">
            <img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
        </a>
    </header>

    <div class="container-fluid">
        <form action="?c=Entradas&a=Guardar" method="post" class="form-neon" autocomplete="off">

            <h1>Actualización De Producto</h1>

            <input type="hidden" name="codigoEP" value="<?php echo $alm[0]->codigo_entrada; ?>">


            <br>
            <P>Producto</P>
            <select name="productoEP" required>
                <option disabled selected value=""><?php echo $alm[0]->nombre_producto; ?></option>
                <option value="Botas negras">Botas Negras</option>
                <option value="botas azules">Botas Azules</option>
                <option value="botas marrones">Botas Marrones</option>
            </select>
            <br>
            <p>Medida</p>

            <select name="medidaEP" required>
                <option disabled selected value=""><?php echo $alm[0]->medida_producto; ?></option>
                <option value="30">30</option>
                <option value="32">32</option>
                <option value="34">34</option>
                <option value="36">36</option>
                <option value="38">38</option>
                <option value="40">40</option>
                <option value="42">42</option>
            </select>
            <br>
            <p>Fecha</p>

            <input type="date" require name="fechaEP" value="<?php echo $alm[0]->fecha_compra; ?>">
            <br>
            <p>Cantidad A Modificar</p>

            <input type="number" placeholder="cantidad" name="cantidadEP"
                value="<?php echo $alm[0]->cantidad; ?>">
            <br>
            <p>Modifique El Precio</p>

            <input type="text" pattern="[0-9]+(\.[0-9]{1,2})?" placeholder="&#8372; Precio en COP" name="precioEP"
                required value="<?php echo $alm[0]->precio; ?>">
            <br>
            <p>Proveedor</p>

            <input type="text" placeholder="Nombre Proveedor" required name="nombreproveedorEP"
                value="<?php echo $alm[0]->nombre_proveedor; ?>">
            <br>
            <p>Nit</p>

            <input type="number" placeholder="NIT" name="nitEP" value="<?php echo $alm[0]->nit; ?>">
            <br>
            <p>Telefono</p>

            <input type="tel" placeholder="Teléfono" name="celEP" required class="form-input"
                value="<?php echo $alm[0]->telefono_proveedor; ?>">
            <br>

            <p>Dirección</p>

            <input type="text" placeholder="direccion proveedor" required name="direccionproveedorEP"
                value="<?php echo $alm[0]->direccion_proveedor; ?>">
            <br>
            <p>Correo</p>

            <input type="email" placeholder="Correo proveedor" name="correoproveedorEP" required class="form-input"
                value="<?php echo $alm[0]->correo_proveedor; ?>">
            <p>Observaciones</p>


            <input type="text" placeholder="observaciones" required name="observacionesEP"
                value="<?php echo $alm[0]->observaciones_entrada; ?>">
            <br>

            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                Actualizar</button>

        </form>
    </div>
    </div>
</body>
<footer></footer>

</html>