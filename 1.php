<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>

<body>
    <input type="button" id="boton1">
    <script>
        var botonUno = document.getElementById("boton1");
        botonUno.style.width = "300px";
        botonUno.style.height = "400px";
        botonUno.style.backgroundColor = "red";
    </script>
    <h3>DATOS FORMULARIO:</h3>
    <p><?php echo $_POST['nombre']; ?></p>
    <p><?php echo $_POST['apellidos']; ?></p>
    <p><?php echo $_POST['dni']; ?></p>
    <p><?php echo $_POST['sexo']; ?></p>
</body>

</html>