<?php

$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$categoria = $_POST['categoria'];
$foto = $_FILES['imagen'];
$autor = $_POST['autor'];
$subida = 1;
$nombre_archivo = "imagen";
$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($foto["tmp_name"]);

if($check == false) {
    echo "El archivo no es una imagen. <br>";
    $subida = 0;
}

if ($foto["size"] > 1048576) {
    echo "Ingrese un tamaño de imagen valido (1Mb)";
    $subida = 0;
}

move_uploaded_file($foto["tmp_name"], $target_file);


// Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

if($subida == 1){
    
    $consulta = "INSERT INTO registro (titulo, noticia, categoria, imagen, autor) VALUES('$titulo', '$noticia', '$categoria', '$target_file', '$autor')";
    if (mysqli_query($conexion, $consulta)) {
        echo "Ingresado correctamente en la base de datos <br>";
    }else{
        echo "Error en el ingreso a la base de datos";
    }
}

?>