<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les boucles exercice 8</title>
  </head>
  <body>
    <?php
    $number = 200;
    while($number >= 0){
      echo '<p>Enfin'. ' ' .$number. '</p>';
      $number = $number - 12;
    }
     ?>
  </body>
</html>
