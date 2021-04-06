<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>

<body>
    <h3>DATOS FORMULARIO:</h3>
    <p><?php if (!empty($_POST['nombre'])) {
            echo $_POST['nombre'];
        } ?>
    </p>
    <p><?php if (!empty($_POST['apellidos'])) {
            echo $_POST['apellidos'];
        } ?>
    </p>
    <p><?php if (!empty($_POST['dni'])) {
            echo $_POST['dni'];
        } ?>
    </p>
    <p><?php if (!empty($_POST['sexo'])) {
            echo $_POST['sexo'];
        } ?>
    </p>
</body>

</html>