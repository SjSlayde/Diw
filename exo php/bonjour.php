<?php require_once('header.php') ?>

<body>
<?php
      echo "Bonjour le monde <br>";//balise echo 

      $euro=6.55957;//declaration de variable
      printf("%.2f FF<br />",$euro);//
      $money1 = 68.75;
      $money2 = 54.35;
      $money = $money1 + $money2;
      // echo $money affichera "123.1";
      echo "affichage sans printf : " . $money . "<br />";
      $monformat = sprintf("%01.2f", $money);

      // echo $monformat affichera "123.10"
      echo "affichage avec printf : " . $monformat . "<br />";

      $year="2002";
      $month="4";
      $day="5";
      $varDate = sprintf("%04d-%02d-%02d <br>", $year, $month, $day) ;

      // echo $varDate affichera "2002-04-05"
      echo "affichage avec sprintf : " . $varDate;
      $var1 = "bonjour";
      $$var1 = "le monde <br>"; 
      $vartest = $var1." " . $bonjour;
      echo $vartest;

      $_GET["societe"] = "Afpa";//variables superglobales
    echo $_GET["societe"]; // Affiche 'Afpa' 
    $a = 15.125863;
settype($a, "integer"); //ça force
echo $a; 
echo "Fichier : " . __FILE__ . ", ligne : " . __LINE__ ;
$myVar = "KO";

if ($myVar == "OK") 
{   
   echo"C'est bon<br>";
} 
else 
{
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
    error_log($message); 
} 
for ($a = 1; $a < 10; $a++) { 
    echo $a; 
} 
    ?>
</body>

    <?php require_once('footer.php') ?>