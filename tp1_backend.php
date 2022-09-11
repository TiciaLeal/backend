<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera clase php</title>
</head>
<body>
    <h1>tp1_backend</h1>
<!--Algunas cosas me adelanté a buscarlas en Google para mejorar la visualización del
ejercicio, por ejemplo unir str y variables con un punto para que se vea en pantalla
qué es ese resultado-->
<hr>
<!--Ejercicio 1. Imprima por pantalla: “Hola mundo”-->
<hr>
    <?php
    echo "Hola mundo";
    ?>
<hr>

<!--Ejercicio 2. Cargue en una variable la cadena
de caracteres “Hola mundo” y luego
imprimala por pantalla.-->
<hr>
<?php
$saludo = "Hola mundo";
echo $saludo;
 ?>
 <hr>

<!--Ejercicio 3. Crear dos variables enteras y mostrar por pantalla,
 la suma, la resta, la multiplicación, la división
 entera y el resto de la división entera.-->
<hr>
<?php
$nro1 = 30;
$nro2 = 5;
echo "Los valores de las variables son 30 y 5";
echo "<hr>";
echo "Suma: ".$nro1 + $nro2;
echo "<hr>";
echo "Resta: ".$nro1 - $nro2;
echo "<hr>";
echo "Multiplicación: ".$nro1 * $nro2;
echo "<hr>";
echo "División: ".$nro1 / $nro2;
echo "<hr>";
echo "Resto: ".$nro1 % $nro2;
 ?>
<hr>
<!--Ejercicio 4. Realizar la transformación de grados Celsius a Fahrenheit,
para el valor 20°C y luego lo imprima por pantalla.-->
<?php
$celsius = 20;
$conversion = $celsius * 1.8 + 32;

echo "20ºC son ".$conversion. " grados Fahrenheit";
?>
<hr>
<!--Ejercicio 5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y
su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm-->
<!--a-->
<?php
$base = 18;
$altura = 12;
$perimetro_rectangulo = 2*$altura + 2*$base;
echo "Perímetro del rectángulo: ".$perimetro_rectangulo;
echo "<hr>";
$area_rectangulo = $base*$altura;
echo "Área del rectángulo: ".$area_rectangulo;
?>
<hr>
<!--b-->
<?php
$radio_circulo = 30;
$perimetro_circulo = 2*$altura + 2*$base;
echo "Perímetro del cículo: ". 3.14*2*$radio_circulo;
echo "<hr>";
$area_circulo = 3.14*$radio_circulo**2;
echo "Área del círculo: ".$area_circulo;
?>
</body>
</html>
