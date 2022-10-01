<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "SELECT * FROM registro";

$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<style>
        table {
            
            border-collapse: collapse;
        }

        td, th {
            text-align: center;
            border: solid 1px black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <table style="width: 100%">
        <tr>
            <th>Titulo</th>
            <th>noticia</th>
            <th>Categoria</th>
            <th>Imagen</th>
            <th>Autor</th>
        </tr>
        <tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                        ?><tr>
                            <td> <?php echo $fila['titulo']; ?> </td>
                            <td> <?php echo $fila['noticia']; ?> </td>
                            <td> <?php echo $fila['categoria']; ?> </td>
                            <td> <?php echo $fila['imagen']; ?> </td>
                            <td> <?php echo $fila['autor']; ?> </td>
                        </tr><?php
                }
            ?>
        </tr>
    </table>
</body>
</html>