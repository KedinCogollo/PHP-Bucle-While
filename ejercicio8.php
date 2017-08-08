<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <h1>Suma de numeros impares entre 1 y 100</h1>
    <?php
    $i="1";
    $cont="0";
    while ($i <= 100) {
      if (($i%2)==1) {
        $cont=$cont+$i;
        echo "$cont </br>";
      }

      $i++;
    }
    ?>

  </body>
</html>
