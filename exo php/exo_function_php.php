<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function php</title>
</head>
<body>
    <?php 
    $test = "Afbfqf54";//mot de passe a tester 
    $resultat = chekmdp($test);//stocke le resultat
    
    if($resultat){
        echo "mot de passe valide";
    }
    if($resultat==false){
        echo "mot de passe invalide";
    }//j'aurai puys mettre un else mais vue qu'il faut un moyen de regarder si le false s'envoye bien pour l'exo
    
    function chekmdp($motdepasse){
    $majfiltre = "/[A-Z]/";//filtre regexp
    $chiffrefiltre = "/[0-9]/";
    if(strlen($motdepasse)==8 and preg_match($majfiltre ,$motdepasse)==1 and preg_match($chiffrefiltre ,$motdepasse)==1){//check si toute est en ordre
        return true;
    }else{
        return false;
    }
    }
 
    date_default_timezone_set("Europe/Paris");
    
    $oDate = new DateTime("01-01-2018");
    $suppdate = new DateTime ("01-01-2000");
    echo "<br>".$oDate->format("d/m/Y H:h:i");
    echo "<br>".$suppdate->format("d/m/Y H:h:i");
    echo "<br>".time();
    echo "<br>"."Nous sommes le " . date("d/m/Y");
    echo "<br>".date("H:i:s")." <br>";
    
    $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}

$dateexo= new DateTime("14-07-2019");
$semainedate = $dateexo->format("W");//renvoie le nombre de semaine passer depuis le debut de l'année
echo "le nombre de semaine passer le ".$dateexo->format("d/m/Y")." est : ".$semainedate."<br>";
  
$datefindeform = new DateTime("06/07/2024 UTC");
    $dateactuelle = new DateTime(date("Y-m-d"));
    echo $dateactuelle->format("d/m/Y")."<br>";
    $ecartdejour = $dateactuelle->diff($datefindeform);//calcul la diffirence de jour entre 2 dates
    echo "nous somme le : ".date("d/m/Y")." le module ce terminant le : ".$datefindeform->format("d/m/Y")." il reste ".$ecartdejour->format("%a")." jour <br>";//"%a" renvoie le nombre de jour de l'operation diff 
    if($dateactuelle->format("L")){//renvoie 1 si l'anee est bissextile
        echo "cette année est bissextile<br>";
    }
    else{
        echo "cette année n'est pas bissextile <br>";
    };

    $oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

    $errors = DateTime::getLastErrors();

    if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "la date du ".$oDate->format("d/m/Y")." est incorect !<br>";
    }
    echo date("H")."h".date("i")."<br>";

    $timestamp = 1000200000;

    $date = new DateTime();

    $date->setTimestamp($timestamp);

    echo $date->format('Y-m-d')." il c'est passer des trucs pas coo.<br>";
    ?> 
</body>
</html>