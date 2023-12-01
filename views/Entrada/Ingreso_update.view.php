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
        <form action="" method="post" class="form-neon" autocomplete="off">

            <h1>Actualización De Producto</h1>

            <input type="hidden" name="codigoEP" value="<?php echo $entrada->getcodigoEP(); ?>">


            <br>
            <P>Producto</P>
            <select name="productoEP" required>
                <option>
                    <?php echo $entrada->getproductoEP(); ?>
                </option>
                <option disabled selected value="">Selecciona un Producto</option>
                <option value="Botas negras">Botas Negras</option>
                <option value="botas azules">Botas Azules</option>
                <option value="botas marrones">Botas Marrones</option>
            </select>
            <br>
            <p>Medida</p>

            <select name="medidaEP" required>
                <option>
                    <?php echo $entrada->getmedidaEP(); ?>
                </option>
                <option disabled selected value="">Selecciona una medida</option>
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

            <input type="date" require name="fechaEP" value="<?php echo $entrada->getfechaEP(); ?>">
            <br>
            <p>Cantidad A Modificar</p>

            <input type="number" placeholder="cantidad" name="cantidadEP"
                value="<?php echo $entrada->getcantidadEP(); ?>">
            <br>
            <p>Modifique El Precio</p>

            <input type="text" pattern="[0-9]+(\.[0-9]{1,2})?" placeholder="&#8372; Precio en COP" name="precioEP"
                required value="<?php echo $entrada->getprecioEP(); ?>">
            <br>
            <p>Proveedor</p>

            <input type="text" placeholder="Nombre Proveedor" required name="nombreproveedorEP"
                value="<?php echo $entrada->getnombreproveedorEP(); ?>">
            <br>
            <p>Nit</p>

            <input type="number" placeholder="NIT" name="nitEP" value="<?php echo $entrada->getnitEP(); ?>">
            <br>
            <p>Telefono</p>

            <input type="tel" placeholder="Teléfono" name="celEP" required class="form-input"
                value="<?php echo $entrada->getcelEP(); ?>">
            <br>

            <p>Dirección</p>

            <input type="text" placeholder="direccion proveedor" required name="direccionproveedorEP"
                value="<?php echo $entrada->getdireccionproveedorEP(); ?>">
            <br>
            <p>Correo</p>

            <input type="email" placeholder="Correo proveedor" name="correoproveedorEP" required class="form-input"
                value="<?php echo $entrada->getcorreoproveedorEP(); ?>">
            <p>Observaciones</p>


            <input type="text" placeholder="observaciones" required name="observacionesEP"
                value="<?php echo $entrada->getobservacionesEP(); ?>">
            <br>

            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                Actualizar</button>

        </form>
    </div>
    </div>
</body>
<footer></footer>

</html>