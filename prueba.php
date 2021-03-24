<?php
function apuntes()
{
    echo '<h2>FUNCIONES ARRAYS</h2>';
    echo '<h3>PARTE 1: Recorrido de la coleccion con for each:</h3>';
    $entrada = array('Miguel', 'Pepe', 'Juan', 'Julio', 'Pablo');
    foreach ($entrada as $nombres => $valor) {
        echo "Nombre $nombres :  $valor <br>";
    }
    $entradaDos = array_slice($entrada, 0, 3);

    echo '<h3>PARTE 2: Extraccion de datos la coleccion:</h3>';
    foreach ($entradaDos as $nombres2) {
        echo $nombres2 . '<br>';
    }

    echo '<h3>PARTE 3: Primer dato de una coleccion:</h3>';
    $minumero = array_shift($entradaDos);
    echo $minumero;

    echo '<h3>PARTE 4: Ordenar una coleccion de datos:</h3>';
    $numeros = array(2, 6, 3, 4, 8, 1, 7, 5);
    asort($numeros);
    foreach ($numeros as $nums) {
        echo $nums . '<br>';
    }

    echo '<h3>PARTE 5: Añadir datos a una coleccion:</h3>';
    array_push($numeros, 9);
    foreach ($numeros as $nums) {
        echo $nums . '<br>';
    }
    sort($numeros);
    echo '<h3>PARTE 6: Recorrer colecciones con bucles for:</h3>';
    for ($i = 0; $i < count($numeros); $i++) {
        echo $numeros[$i];
        if ($i < count($numeros) - 1) {
            echo "---";
        }
    }
}
function miPrimeraFuncion()
{
    global $cadena;
    $cadena = 'Hola DAM';
}
function ej1()
{
    $v1 = "Hola";
    $v2 = "amigos";
    echo $v1 . " " . $v2;
}
function ej2()
{
    $v1 = 55;
    $v2 = 53;
    if ($v1 > $v2) {
        print "55>53";
    } else {
        print "55<53";
    }
}
function ej3()
{
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
}
function ej4()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            print $i . "<br>";
        }
    }
}
function ej5()
{
    $tabla = 4;
    for ($i = 1; $i <= 10; $i++) {
        print ($tabla * $i) . "<br>";
    }
}
function ej6()
{
    $v1 = "Hola";
    $v2 = " amigos";
    if ($v1 == $v2) {
        print "Son iguales";
    } else {
        print "Son diferentes";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRUEBAS JAVASCRIPT</title>
    <script src="ScriptsAlejandro.js"></script>
    <script src="Jquery/jquery-1.6.3.min.js"></script>
    <link rel="stylesheet" href="prueba.css">
    <script>
        /** Funcion que consigue un efecto de niebla al inicio de la web */
        $(function() {
            $("body").hide().fadeIn(900);
        });
        var ejercicios = ["<?php ej1(); ?>", "<?php ej2(); ?>", "<?php ej3(); ?>", "<?php ej4(); ?>", "<?php ej5(); ?>", "<?php ej6(); ?>"];
    </script>
</head>

<body>
    <div id="titulo">
        <h1>Ejercicios y apuntes PHP <br> ALEJANDRO RUBIO OLIVA</h1>
    </div>
    <div id="contenido">
        <h1>APUNTES:</h1>
        <?php apuntes(); ?>
        <h1>EJERCICIOS:</h1>

        <script>
            for (let index = 0; index < ejercicios.length; index++) {
                document.write("<h3>Ejercicio " + (index + 1) + ":" + "</h3>");
                document.write(ejercicios[index]);
            }
        </script>

    </div>

</body>

</html>