<?php
$importe = $_POST['importe'];
$cant_hijos = $_POST['cant_hijos'];
$empleado = $_POST['usuario'];
//Proceso
$bonificacion = $cant_hijos * 50;
$sueldoBasico = 600;
$comision = $importe * 0.075;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
$descuento = $sueldoBruto * 0.11;
$sueldoNeto = $sueldoBasico - $descuento;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
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
                    <a class="nav-link active" href="ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link" href="ejercicio02.php">Ejercicio 02</a>
                    <a class="nav-link" href="ejercicio03.php">Ejercicio 03</a>
                    <a class="nav-link" href="ejercicio04.php">Ejercicio 04</a>
                </div>
            </div>
        </div>

    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1> Bienvenido
                    <?php echo $empleado; ?>
                </h1>
            </div>
            <div class="card-body">
                <p>Información sobre su sueldo:</p>

                <?php
                $info = array(
                    'Comisión' => $comision,
                    'Bonificación' => $bonificacion,
                    'Sueldo Bruto' => $sueldoBruto,
                    'Descuento' => $descuento,
                    'Sueldo Neto' => $sueldoNeto,
                );

                foreach ($info as $info => $value) {
                    echo $info . ' => ' . $value . '<br>';
                }


                ?>

            </div>
        </div>

    </div>
</body>

</html>