<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo noticia</title>
</head>
<body>
    <form action="Proceso_formulario.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Titulo: </label><br>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="noticia">Noticia: </label><br>
        <textarea name="noticia" id="noticia" cols="35" rows="10" required></textarea><br>
        <label for="categoria">Categoria: </label><br>
        <input type="text" id="categoria" name="categoria" required><br>
        <label for="foto">Imagen: </label><br>
        <input type="file" id="imagen" name="imagen" required><br>
        <label for="autor">Autor: </label><br>
        <input type="text" id="autor" name="autor" required><br><br>
        <input type="submit" value="Crear noticia">
    </form>
</body>
</html>