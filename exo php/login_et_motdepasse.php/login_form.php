<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page connection</title>
    <?php 
    session_start();
    ?>
</head>
<body>
    <form action="login_script.php" methos="POST">
    <label for="identifiant">Votre identifiant</label><input type="text" name="identifiant" id="identifiant"><br>
    <label for="motdepasse">Mot de passe</label><input type="text" name="mdp" id="mdp"><br>
    <button type="submit">Envoyer</button>
    </form>
    <?php 
    // $log = $_SESSION["user"];
    // foreach($log as $key => $value){
    //     echo $key."=>".$value."<br>";
    // }
    // echo $log["nom"];
    ?>
</body>
</html>