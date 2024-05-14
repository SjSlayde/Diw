<?php
echo "bonjour " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "<br>";
foreach($_REQUEST as $key){
    echo $key."<br>";
}
echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 
foreach ($_REQUEST["jours"] as $jour)   
{ 
    echo  $jour." - <br>"; 
}
if ( isset( $_POST['update'])) { // mise à jour
    echo "mise a jour";
} elseif ( isset($_POST['delete'])) {
    echo "suppression";
} elseif ( isset($_POST['create'])) {
    echo "Création";
}
echo"<br>";
?>