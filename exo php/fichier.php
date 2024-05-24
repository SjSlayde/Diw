<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
     $myVar = "Bonjour le monde";

     // Ouverture en écriture seule 
     $fp = fopen("essai.txt", "a"); 
     
     // Ecriture du contenu ($myVar) 
     fputs($fp, $myVar); 
     
     // Fermeture du fichier  
     fclose($fp);
    
    $text = file('liens.txt');
    //file('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');
    foreach($text as $key => $value){
        echo '<a href="'.$value.'"\>'.$value.'<\a><br>';
    }
    ?>

<table class="table">
<thead>
    <tr>
      <th scope="col">Surname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
    </tr>
  </thead>
        <tbody>
            <?php 
            $list = file('https://ncode.amorce.org/customers.csv');
                foreach($list as $key => $value){
                    $pieces = explode(",", $value);
                    echo '<tr>';
                    foreach($pieces as $key2 => $value2){
                        echo "<td>".$value2.'</td>';
                    }
                    echo "</tr>";
                    }
            ?>
        </tbody>
        </table>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>