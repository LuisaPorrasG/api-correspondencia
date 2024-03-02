<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Datos Pedidos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "admi_correspondencia";
    $conexion =  mysqli_connect($hostname, $usuario, $password, $dbname);
    ?>
    <diV>
        <table class="table table-success table-striped">
            <tr class="fw-bold"><!--tr es como fila y td es columna-->
                <td>ID_CORRESPONDENCIA</td>
                <td>APARTAMENTO</td>
                <td>REMITENTE</td>
                <td>ID_RESIDENTE</td>
                <td>FECHA RECEPCIÓN</td>
            </tr>
            <?php
            $sql = 'SELECT * FROM correspondencia ';
            $resultado = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['id_correspondencia'] ?></td>
                    <td><?php echo $mostrar['apartamento'] ?></td>
                    <td><?php echo $mostrar['remitente'] ?></td>
                    <td><?php echo $mostrar['id_residente'] ?></td>
                    <td><?php echo $mostrar['fecha_recepcion'] ?></td>

                </tr>

            <?php
            }
            ?>
            <div class="container text-center">
                <hr>
                <a href="./index.html" class="btn btn-primary btn-lg fs-4 text-center my-3">VOLVER AL INCIO</a>
                <hr>


            </div>



        </table>






    </diV>

</body>

</html>