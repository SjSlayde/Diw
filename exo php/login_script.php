<?php 
$identifiant = "admin";
$motdepasse = "admin";
var_dump($_REQUEST["identifiant"]);
var_dump($_REQUEST["motdepasse"]);
foreach($_REQUEST as $key){
    echo $key."<br>";
}
if($_REQUEST['identifiant']==$identifiant){
    $auth = "ok";
    echo "yop";
}
?>