<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-sm-3">
                <h1>Laboratorio 5</h1>
            </div>

            <div class="col-sm-9">
                <div class="navbar-nav">
                    <a class="nav-link " href="ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link active" href="ejercicio02.php">Ejercicio 02</a>
                    <a class="nav-link" href="ejercicio03.php">Ejercicio 03</a>
                    <a class="nav-link" href="ejercicio04.php">Ejercicio 04</a>
                </div>
            </div>
        </div>

    </nav>
    <div class="container mt-3" style="width: 425px;">
        <div class="card">
            <div class="card-header">
                <h1>Nuevo precio de gaseosas</h1>
            </div>
            <div class="card-body">
                <form method="POST" id="form">

                    <div class="d-flex justify-content-between  mt-3">
                        <label for="">Precio actual:</label>
                        <input id="precioA" name="precioA" type="number" placeholder="Precio actual de la gaseosa"
                            required>
                    </div>

                    <div class="d-flex justify-content-between  mt-3">
                        <label for="">Cantidad de unidades:</label>
                        <input id="unidades" name="unidades" type="number" placeholder="Unidades adquirida" required>
                    </div>


                    <div class="d-flex justify-content-between  mt-3">
                        <button type="submit" class="btn bg-primary  mt-3 text-white form-control"
                            id="btn-login">Ingresar</button>

                        <button class="btn bg-danger mt-3 text-white form-control" type="reset">Limpiar</button>
                    </div>
                </form>

                <div>

                    <h2>RESULTADO:</h2>

                    <?php

                    $precioA = $_POST['precioA'];
                    $unidades = $_POST['unidades'];

                    $precioN = $precioA * 0.95;
                    $importeCom = $precioA * $unidades;
                    $importeDesc = $importeCom * 0.07;
                    $obsequio = 2 * $unidades;
                    $importePagar = $importeCom - $importeDesc;

                    $info = array(
                        'El nuevo precio de la gaseosa es: ' => $precioN . ' soles',
                        'Importe de la compra' => $importeCom . ' soles',
                        'Importe del descuento' => $importeDesc . ' soles',
                        'Importe a pagar' => $importePagar . ' soles',
                        'Obsequios: ' => $obsequio . ' unidades de caramelos',
                    );

                    ?>
                    <p> Dado el precio actual de:
                        <?php echo $precioA; ?> gaseosas
                    </p>
                    <p> Y la cantidad comprada de :
                        <?php echo $unidades; ?> unidades
                    </p>

                    <?php
                    foreach ($info as $info => $value) {
                        echo $info . ' => ' . $value . '<br>';
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>