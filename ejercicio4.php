<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Numeros impares que hay entre 1 y 100</h1>
    <?php
    $i="1";

    while ($i <= 100) {
        if (($i%2)==1) {
          echo "$i <br>";
        }
        $i++;
    }

    ?>
  </body>
</html>
