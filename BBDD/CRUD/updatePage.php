<?php
    require_once("conexionBD.php");

    $pdo=conexionBD();

    $idActualizar = $_REQUEST["id"];
    setcookie("id",  $idActualizar, time() + 3600);
    $titulo = "";
    $descripcion = "";

    $consulta = $pdo->prepare("SELECT title, description FROM task WHERE id = :id");
    $consulta->bindParam(':id', $idActualizar, PDO::PARAM_INT);
    $consulta->execute();

    if ($datos = $consulta->fetch()) {
        $titulo = $datos['title'];
        $descripcion = $datos['description'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición Libro</title>
    <link rel="stylesheet" href="scripts/style.css">
    <script src="https://kit.fontawesome.com/4a521abdbf.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <a class="volverAtras" href="crud.php">Volver Atrás</a>
        <h1>PÁGINA DE EDICIÓN</h1>
    </header>

    <div class="container">
        <form class="containerRegistro" method="post" action="update.php">
            <div class="col">
                <label class="textLabel">Título:</label>
                <input type="text" name="title" id="tituloLibro" placeholder="Introduzca aquí el título" value="<?php echo $titulo?>" required>
            </div>
            <div class="col">
                <label class="textLabel">Descripción:</label>
                <textarea name="description" id="description" placeholder="Introduzca aquí la descripción"><?php echo $descripcion?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $idActualizar; ?>">
            <div class="btnContainer">
                <button class="btnRegistrar">Actualizar</button>
                <button type="reset" class="btnReset">Cancelar</button>
            </div>
        </form>
    </div>

</body>
</html>



