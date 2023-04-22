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
                    <a class="nav-link" href="ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link" href="ejercicio02.php">Ejercicio 02</a>
                    <a class="nav-link active" href="ejercicio03.php">Ejercicio 03</a>
                    <a class="nav-link" href="ejercicio04.php">Ejercicio 04</a>
                </div>
            </div>
        </div>
        
    </nav>

    <div class="container mt-3" style="width: 425px;">
        <div class="card">
            <div class="card-header"> <h1>Importe a pagar por alquiler de autos</h1> </div>
            <div class="card-body">
                <form  method="POST" id="form">

                    <div class="d-flex justify-content-between  mt-3">
                        <label for="">Tarifa:</label>
                        <input id="tarifa" name="tarifa" type="number" 
                            placeholder="Tarifa por día" required>
                    </div>

                    <div class="d-flex justify-content-between  mt-3">
                        <label for="">Número de días de alquiler:</label>
                        <input id="dias" name="dias" type="number"  placeholder="Número de días"
                            required>
                    </div>


                    <div class="d-flex justify-content-between  mt-3">
                        <button type="submit" class="btn bg-primary  mt-3 text-white form-control"
                            id="btn-login">Ingresar</button>

                        <button class="btn bg-danger mt-3 text-white form-control" type="reset" >Limpiar</button>
                    </div>
                </form>

                <div>

                <h2 class="mt-3">RESULTADO:</h2>

                <?php 

                    $tarifa=$_POST['tarifa'];
                    $num_dias=$_POST['dias'];

                    $importeBruto=$num_dias*$tarifa;
                    $descuento =$importeBruto*0.15;
                    $obsequio=3*$num_dias;
                    $importeNeto=$importeBruto-$descuento;

                    $info=array(
                        'Importe bruto' => $importeBruto.' soles',
                        'Importe del descuento' => $descuento.' soles',
                        'Importe neto a pagar' => $importeNeto.' soles',
                        'Obsequios: ' => $obsequio.' unidades de lapiceros',
                    );
                    
                ?>
                    <p> Dado la tarifa de alquiler de: <?php echo $tarifa;?> soles </p>
                    <p> Y la cantidad de días de alquiler: <?php echo $unidades;?> días </p>

                <?php
                    foreach ($info as $info => $value) {
                        echo $info.' => '.$value . '<br>';
                    }


                ?>
                </div>
            </div>
        </div>
    </div>


</body>
</html>