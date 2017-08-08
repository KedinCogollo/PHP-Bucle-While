<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h1>Suma de todos los numeros que van de 1 a 100</h1>
    <?php
    $i="1";
    $cont="0";
    while ($i <= 100) {
      $cont=$cont+$i;
      echo "$cont </br>";
      $i++;
    }
    ?>
  </body>
</html>
