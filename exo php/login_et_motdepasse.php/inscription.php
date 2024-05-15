<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    session_start()
    ?>
    <style>
        ::placeholder {
            color:black;
            opacity: 0.5;
        }
        </style>
</head>
<body>
    <form action="inscrition_script.php" method="POST">
    <label>Nom</label><input type="text" name="nom" placeholder="nom" required><br>
    <label>Prénom</label><input type="text" name="prenom" placeholder="prenom" required><br>
    <label>Email</label><input type="email" name="email" placeholder="email" required><br>
    <label>Mot de passe</label><input type="text" placeholder="mot de passe" name="motdepasse" required><br>
    <button type="submit">Envoyer</button>
</form>

</body>
</html>