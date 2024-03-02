<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
    include_once("./model/correspondencia.php");
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar el valor del input y guardarlo en una variable
        $valor1 = $_POST['id_correspondencia'];
        $valor2 = $_POST['apartamento'];
        $valor3 = $_POST['remitente'];
        $valor4 = $_POST['residente'];
        $valor5 = $_POST['fecha'];

        echo "Los datos ingresados son: " .
            'id_correspondencia: ' . $valor1 . ' apartamento: ' . $valor2 . ' remitenete:' . $valor3 . ' residente: ' . $valor4 . ' fecha: ' . $valor5;
    } else {
        // Si el formulario no ha sido enviado
        echo "Error: El formulario no ha sido enviado.";
    }

    $us = new Correspondencia();
    $us->registrarCorrespondencia2($valor1, $valor2, $valor3, $valor4, $valor5);
    ?>

    <div>

        <br>
        <hr>
        <a href="./index.html" class="btn btn-primary btn-lg fs-2 text-center">VOLVER AL INCIO</a>


    </div>
</body>

</html>