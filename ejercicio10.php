<?php
    $i="1";
    $a="10";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
  </head>
  <body>
    <h1>Imprimir numeros que ha entre dos numeros ingresados</h1>
    <h2>Numero 1 : <?php echo $i ?> </h2>
    <h2>Numero 2 : <?php echo $a ?> </h2>
    <?php

    while ($i <= $a) {
      echo "$i </br>";
      $i++;
    }
    ?>
  </body>
</html>
