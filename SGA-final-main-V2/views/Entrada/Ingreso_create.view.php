<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/SGAlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/ingreso.css" />

    <title>ENTRADA DE PRODUCTO</title>
</head>

<body>

    <header>
        <a href="?c=menu&a=main">
            <img class="logo" src="assets/img/SGAlogo.jpg" alt="Logo" />
        </a>
    </header>
    <main>

        <div class="container-fluid">


            <form action="" method="post" class="form-neon" autocomplete="off">
                <h1>ENTRADA DE PRODUCTO</h1>

                <select name="productoEP" required>
                    <option disabled selected value="">Selecciona un Producto</option>
                    <option value="botas negras">Botas Negras</option>
                    <option value="botas azules">Botas Azules</option>
                    <option value="botas marrones">Botas Marrónes</option>
                </select>
                <br>

                <select name="medidaEP" required>
                    <option disabled selected value="">Selecciona una medida</option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                    <option value="36">36</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option>
                </select>

                <input type="date" require name="fechaEP">

                <input type="number" placeholder="cantidad" name="cantidadEP"></imput>

                <input type="text" pattern="[0-9]+(\.[0-9]{1,2})?" placeholder="&#8372; Precio en COP" name="precioEP"
                    required>

                <input type="text" placeholder="Nombre proveedor" required name="nombreproveedorEP"></imput>

                <input type="number" placeholder="NIT" name="nitEP"></imput>

                <input type="tel" placeholder="Teléfono" name="celEP" required class="form-input">


                <input type="text" placeholder="Direccion proveedor" required name="direccionproveedorEP"></imput>

                <input type="email" placeholder="Correo proveedor" name="correoproveedorEP" required class="form-input">
                </imput>

                <input type="text" placeholder="Observaciones" required name="observacionesEP"></imput>

                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                    ENVIAR</button>

            </form>
            <footer>
                GSA
            </footer>
        </div>

    </main>
</body>

</html>