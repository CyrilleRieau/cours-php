<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Identite</title>
</head>
<body>
<?php if ($_POST['nom']=='' or $_POST['prenom']=='' or $_POST['age']=='' or 
$_POST['region']=='' or $_POST['animals']=='') {
    echo '<p>Fiche non renseignée</p>';
} else {
echo '<p>'.$_POST['nom'].' '.$_POST['prenom'].' est âgé de '.$_POST['age'].
' ans, vient de '.$_POST['region'].' et préfère les '.$_POST['animals'].
'.</p>';}
?>    
</body>
</html>
