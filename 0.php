<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>

<body>
    <fieldset>
        <legend>FORMULARIO:</legend>
        <form action="prueba.php?cambio=true" method="post">
            <label for="nombre">NOMBRE:</label><br>
            <input required type="text" name="nombre" id="nombre" size="20" maxlength="20"><br><br>
            <label for="apellidos">APELLIDOS:</label><br>
            <input required type="text" name="apellidos" id="nombre" size="20" maxlength="42"><br><br>
            <label for="dni">DNI:</label><br>
            <input required type="text" name="dni" id="nombre" size="20" maxlength="9"><br><br>
            <u><label for="sexo">SEXO:</label></u><br>
            &nbsp;&nbsp;<input required type="radio" name="sexo" id="sexo" value="Mujer">--Mujer.<br>
            &nbsp;&nbsp;<input required type="radio" name="sexo" id="sexo" value="Hombre">--Hombre.<br>
            &nbsp;&nbsp;<input required type="radio" name="sexo" id="sexo" value="Otro">--Otro.<br>
            <br>
            <button type="submit">Enviar formulario</button>
        </form>
    </fieldset>
</body>
</html>