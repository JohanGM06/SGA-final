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

            <h1>SALIDA</h1>
            <input type="hidden" name="codigoS" value="<?php echo $salida->getcodigoS(); ?>">
            <select name="productoS" required value="">
                <option disabled selected value="">Selecciona un Producto</option>
                <option value="botas negras">Botas negras</option>
                <option value="botas azules">Botas azules</option>
                <option value="botas marrones">Botas marrones</option>
            </select>

            <select name="medidaS" required value="">
                <option disabled selected value="">Selecciona una medida</option>
                <option value="30">30</option>
                <option value="32">32</option>
                <option value="34">34</option>
                <option value="36">36</option>
                <option value="38">38</option>
                <option value="40">40</option>
                <option value="42">42</option>
            </select>

            <input type="date" require name="fechaS" value="">

            <input type="number" placeholder="cantidad" require name="cantidadS" value=""></imput>

            <select name="tipoidS">
                <option disabled selected value="">Tipo De Documento</option>
                <option value="CC">CC</option>
                <option value="CE">CE</option>
                <option value="PASAPORTE">PASAPORTE</option>
                <option value="DE">DOCUMENTO EXTRANJERO</option>
                <option value="NIT">NIT</option>
            </select>

            <input type="number" placeholder="Numero de id" name="numidS" value=""></imput>

            <input type="text" placeholder="Nombre" name="nombresS" value=""></imput>

            <input type="tel" placeholder="Telefono" name="celS" required class="form-input" value=""></imput>

            <input type="text" placeholder="Direccion" name="direccionS" value=""></imput>

            <input type="text" placeholder="Correo" name="coreoS" required class="form-input" value=""></imput>

            <input type="text" placeholder="Observaciones" name="observacionesS" value=""></imput>

            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                ENVIAR</button>

        </form>
    </div>
    </div>
</body>
<footer></footer>

</html>