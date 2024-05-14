<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page connection</title>
    <?php 
    session_start();

    if ($_SESSION["identifiant"]) 
    {
       echo"Vous êtes autorisé à voir cette page.";  
    } 
    else 
    {
       echo"Cette page nécessite une identification.";  
    }

$_SESSION["login"] = $identifiant;
echo"- session ID : ".session_id();

echo $_SESSION["login"];
    if($auth=="ok"){
        echo "te revoila :".$_REQUEST["identifiant"];
    }
    ?>
</head>
<body>
    <form action="login_script.php" methos="POST">
    <label for="identifiant">Votre identifiant</label><input type="text" name="identifiant" id="identifiant"><br>
    <label for="motdepasse">Mot de passe</label><input type="text" name="motdepasse" id="motdepasse"><br>
    <button type="submit">Envoyer</button>
    </form>
</body>
</html>