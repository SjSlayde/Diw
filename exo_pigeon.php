
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="script_pigeon.php" method="post" enctype="multipart/form-data">
    Choisissez une image à télécharger : <input type="file" name="image" /><br />
    <input type="submit" value="Télécharger" />
</form>
<?php 
$image = $_SESSION['pic'];
echo '<img src="'.$image.'" alt="pigeon">';
?>
</body>
</html>