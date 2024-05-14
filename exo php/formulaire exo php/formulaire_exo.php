<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="script2.php" method="post"> 
      Nom : <input type="text" name="nom" size="20" maxlength="40" /> <br /> 
      Prenom : <input type="text" name="prenom" size="20" maxlength=40 /> <br>
      Tu utilises internet plutôt le :<br /> 
    <input type="checkbox" name="jours[]" value="Lundi" />Lundi<br />
    <input type="checkbox" name="jours[]" value="Mardi" />Mardi<br />
    <input type="checkbox" name="jours[]" value="Mercredi" />Mercredi<br />
    <input type="checkbox" name="jours[]" value="Jeudi" />Jeudi<br />
    <input type="checkbox" name="jours[]" value="Vendredi" />Vendredi<br />
    <input type="submit" name="delete" value="Supprimer">
    <input type="submit" name="create" value="Créer">
    <input type="submit" name="update" value="Modifier">
      <input type="submit" value="ENVOYER" /> 
    </form> 
</body>
</html>