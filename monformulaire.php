<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <form action="ficheIdentite.php" method="POST">
    <section>
        <label>Nom </label><input type="text" name="nom"><br/>
        </section>
        <section>
        <label>Prenom </label><input type="text" name="prenom"><br/>
        </section>
        <section>
    <label>Age </label><input type="number" name="age" min=0 max=120><br/>
    </section>
        <section>
        <label>Region </label><select name="region">
        <option value="Région">Région</option>
        <option value="Auvergne Rhône-Alpes">Auvergne Rhône-Alpes</option>
        <option value="Bourgogne Franche-Comté">Bourgogne Franche-Comté</option>
        <option value="Grand-Est">Grand-Est</option>
        <option value="Hauts-de-France">Hauts-de-France</option>
        <option value="Ile de France">Ile de France</option>
        <option value="Normandie">Normandie</option>
        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
        <option value="Pays de la Loire">Pays de la Loire</option>
        <option value="Bretagne">Bretagne</option>
        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
        <option value="Occitanie">Occitanie</option>
        <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur </option>
        <option value="Corse">Corse</option>
        <option value="Autre">Autre</option>
        </select><br/>
        </section>
        <section>
        <label>Préfère les </label><br/>
        <input type="radio" name="animals" value="Chiens" id="chiens">
        <label for="chiens">Chiens </label><br/>
        <input type="radio" name="animals" value="Chats" id="chats">
        <label for="chats">Chats </label>
        </section>
        <section>
        <button>Envoyer</button>
        </section>
    </form>
</body>
</html>