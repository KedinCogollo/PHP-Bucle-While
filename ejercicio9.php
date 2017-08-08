<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
  </head>
  <body>
    <h2>Suma de numeros pares que hay entre 1 y 100</h2>
    <h2>Cuantos numeros pares hay</h2>
    <?php
    $i="1";
    $cont="0";
    $suma="100";
    while ($i <= 100) {
      if (($i%2)==0) {
        $cont=$cont+$i;
        echo "$cont </br>";
      }

      $i++;
    }
    $suma=$suma/2;
    echo "El numero de pares que hay entre 1 y 100 es: $suma";
    ?>
  </body>
</html>
