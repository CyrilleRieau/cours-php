<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentation</title>
</head>
<?php
    $nom = 'Rieau';
    echo '<p>'.$nom.'</p>';
    for ($x=0; $x<=10; $x++){
        echo '<p>'.$x.'</p>';
    };
    ?>    

<body>
    <p>
        <?php
        echo $nom;
?>
    </p>
</body>
</html>

