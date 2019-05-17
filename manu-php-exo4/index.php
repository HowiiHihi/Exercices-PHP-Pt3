<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt3 - Exercice 4</title>
</head>
<body>
  <h1>Exercice 4</h1>

  <?php

$number = 1;

while ($number <= 10) {
  echo $number;
  echo '<br />';
  $number += $number / 2;
}

  ?>

</body>
</html>
