<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>
<body>
<table border = "1">
<?php
$compteur = 0;
for ($x=1; $x<=10; $x++) {
    echo '<tr>';
    for ($y=1; $y<=10; $y++){
        $compteur++;
        echo '<td>'.$compteur.'</td>';
    }
    echo '</tr>';
    }
    ?>
</table>
    </body>
</html>

<!-- $table =[];
  echo '<table><tbody><tr><td>'.
(for ($i=0; $i<=100; $i++){
array_push ($table, $i);
   }).'</tbody></table>';
   */
 -->