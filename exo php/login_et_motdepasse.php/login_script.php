<?php 
session_start();
$log = $_SESSION["user"];

// var_dump($_REQUEST["identifiant"]);
// var_dump($_REQUEST["motdepasse"]);
// foreach($_REQUEST as $key){
//     echo $key."<br>";
// }



if($_REQUEST['identifiant']==$log["nom"] and password_verify($_REQUEST['mdp'], $log["motdepasse"])==1){
    $_SERVER["auth"] = "ok";
    echo"yop";
}

else if ($_REQUEST['identifiant']!=$log["nom"] and password_verify($_REQUEST['mdp'], $log["motdepasse"])!=1){
    unset($_SESSION["auth"]);
    echo"nop";
}

if(isset($_SERVER["auth"]) == true){
    header("Location:connecte.php");
}

elseif(isset($_SESSION["auth"])==false){
    header("Location:login_form.php");
}
?>