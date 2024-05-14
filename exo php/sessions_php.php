<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    session_start();

    $_SESSION["login"] = "webmaster";
    
    echo $_SESSION["login"];
    $password_hash = password_hash("vacances", PASSWORD_DEFAULT);
    echo "<br>".$password_hash; 
    $check = password_verify("vacances", $password_hash);
    echo "<br>".$check;
    ?>
</head>
<body>
    
</body>
</html>