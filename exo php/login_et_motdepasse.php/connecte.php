<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connecté</title>
<style>
body{
    background-color: green;
}
<?php 
session_start();
if(isset($_SERVER["auth"])){
    echo "yop";
}
?>
</style>
</head>
<body>
    
</body>
</html>