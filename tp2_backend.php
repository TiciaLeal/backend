<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //1. Crear una variable n y validar que sea un número positivo//
    $natalia = 1;
    if ($natalia > 0) {
      echo "$natalia es un número positivo";
    }
    else {
      echo "$natalia no es un número positivo";
    }
     ?>
     <hr>
     <?php
     //2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.//
     $nati = 11;
     if ($nati > 1 & $nati < 10) {
       echo "$nati es un número mayor a 1 y menor que 10";
     }
     else {
       echo "$nati es un número menor o igual a 1 o igual o mayor que 10";
     }
      ?>
      <hr>
      <?php
      //3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.//
      $nat = 10;
      if ($nat > 10 or $nat < 2) {
        echo "$nat es un número mayor que 10 o menor que 2";
      }
      else {
        echo "$nat es un número menor o igual a 10 o igual o mayor que 2";
      }
       ?>
       <hr>
       <?php
       /*4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
       mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
       mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
       numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.*/
       $numero1 = 9;
       $numero2 = 8;
       if ($numero1 > $numero2) {
         echo $numero1 + $numero2,"<hr>";
         echo $numero1 - $numero2, "<hr>";
       }
       elseif ($numero2 > $numero1) {
         echo $numero1 * $numero2, "<hr>";
         echo $numero1 / $numero2, "<hr>";
         echo $numero1 % $numero2, "<hr>";
      }
       else {
         echo "Los números ingresados son iguales";
       }
        ?>

  </body>
</html>
