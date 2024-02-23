<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/ingreso.css" />
    <title>Salida</title>
</head>

<body>


    <main>
        <div class="container-fluid text-body-secondary">

            <form action="" method="post" class="form-neon" autocomplete="off">
                <h1 class="<?php echo ($tema == 'oscuro') ? 'text-light' : 'text-dark'; ?>">SALIDA</h1>

                <select name="productoS" required value="">
                    <option disabled selected value="">Selecciona un Producto</option>
                    <option value="botas negras">Botas Negras</option>
                    <option value="botas azules">Botas Azules</option>
                    <option value="botas marrones">Botas Marrones</option>
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
                    <option disabled selected value="">Documento</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="DE">DOCUMENTO EXTRANJERO</option>
                    <option value="NIT">NIT</option>
                </select>

                <input type="number" placeholder="numero de id" name="numidS" value=""></imput>

                <input type="text" placeholder="Nombre" name="nombresS" value=""></imput>

                <input type="tel" placeholder="Teléfono" name="celS" class="form-input">


                <input type="text" placeholder="Direccion" name="direccionS" value=""></imput>

                <input type="email" placeholder="Correo" name="coreoS" class="form-input">


                <input type="text" placeholder="observaciones" name="observacionesS" value=""></imput>

                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                    ENVIAR</button>

            </form>

        </div>
    </main>
</body>

</html>