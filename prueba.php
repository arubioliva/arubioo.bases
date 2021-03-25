<?php
$web = '0.php';
if (isset($_GET['cambio']) && ($_GET['cambio'])) {
    $web = '1.php';
}
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
    <div id="contenidoTotal">
        <div id="contenidoApuntes">
            <h2>FORMULARIOS:</h2>
            <?php
            include($web);
            ?>
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
        <div id="contenidoSolucion">
            <h1>APUNTES:</h1>
            <h2>FUNCIONES ARRAYS</h2>
            <h3>PARTE 1: Recorrido de la coleccion con for each:</h3>
            <p class="codigo">
                $entrada = array('Miguel', 'Pepe', 'Juan', 'Julio', 'Pablo');<br>
                foreach ($entrada as $nombres =&gt; $valor) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Nombre $nombres : $valor &lt;br&gt;";<br>
                }<br>
                $entradaDos = array_slice($entrada, 0, 3);<br>
            </p>
            <h3>PARTE 2: Extraccion de datos la coleccion:</h3>
            <p class="codigo">
                foreach ($entradaDos as $nombres2) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $nombres2 . '&lt;br&gt;';<br>
                }<br>
            </p>
            <h3>PARTE 3: Primer dato de una coleccion:</h3>
            <p class="codigo">
                $minumero = array_shift($entradaDos);<br>
                echo $minumero;<br>
            </p>
            <h3>PARTE 4: Ordenar una coleccion de datos:</h3>
            <p class="codigo">
                $numeros = array(2, 6, 3, 4, 8, 1, 7, 5);<br>
                asort($numeros);<br>
                foreach ($numeros as $nums) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $nums . '&lt;br&gt;';<br>
                }<br>
            </p>
            <h3>PARTE 5: Añadir datos a una coleccion:</h3>
            <p class="codigo">
                array_push($numeros, 9);<br>
                foreach ($numeros as $nums) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $nums . '&lt;br&gt;';<br>
                }<br>
                sort($numeros);<br>
            </p>
            <h3>PARTE 6: Recorrer colecciones con bucles for:</h3>
            <p class="codigo">
                for ($i = 0; $i &lt; count($numeros); $i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo $numeros[$i];<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if ($i &lt; count($numeros) - 1) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "---";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }<br>
            </p>
            <h1>EJERCICIOS:</h1>
            <h3>Ejercicio 1 </h3>
            <p class="codigo">
                $v1 = "Hola"; <br>
                $v2 = "amigos"; <br>
                echo $v1 . " " . $v2; <br>
            </p>
            <h3>Ejercicio 2 </h3>
            <p class="codigo">
                $v1 = 55; <br>
                $v2 = 53; <br>
                if ($v1 > $v2) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;print "55>53"; <br>
                } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;print "55<53"; <br>
                    }
            </p>
            <h3>Ejercicio 3 </h3>
            <p class="codigo">
                for ($i = 1; $i <= 10; $i++) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp; echo $i . "&lt;br&gt;"; <br>
                    }
            </p>
            <h3>Ejercicio 4 </h3>
            <p class="codigo">
                for ($i = 1; $i <= 20; $i++) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp; if ($i % 2 != 0) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print $i . "&lt;br&gt;"; <br>
                    &nbsp;&nbsp;&nbsp;&nbsp; } <br>
                    } <br>
            </p>
            <h3>Ejercicio 5 </h3>
            <p class="codigo">
                $tabla = 4;<br>
                for ($i = 1; $i <= 10; $i++) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp; print ($tabla * $i) . "&lt;br&gt;"; <br>
                    } <br>
            </p>
            <h3>Ejercicio 5 </h3>
            <p class="codigo">

                $v1 = "Hola";<br>
                $v2 = " amigos";<br>
                if ($v1 == $v2) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print "Son iguales";<br>
                } else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print "Son diferentes";<br>
                }<br>
            </p>
        </div>
    </div>

</html>