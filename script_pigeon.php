<?php
session_start();
// uplaod l'image dans un dossier//
if(isset($_FILES['image']['name'])){ 
    echo 'yop';
    $origine = $_FILES['image']['tmp_name'];

    $adresse = $_FILES['image']['name'];
    
    // $destination = 'image/'.$_FILES['image']['tmp_name'];
    
    // move_uploaded_file($origine,$destination);

    
}
    // $image = $_FILES['image']['name'];
    $_SESSION['pic'] = $adresse;

echo '<img src="'.$adresse.'" alt="Image"><br>';

echo $_FILES['image']['name'];
$i = 0;
// foreach($_FILES['image'] as $key => $value){
//     echo $key.'=>'.$value.'<br>';
//     echo '<img src="image/'.$key.'" alt="Image"><br>'.$i;
//     echo '<img src="'.$value.'" alt="Image"><br>'.$i;
//     $i++;
// }
?>
<?php
 header("Location:exo_pigeon.php")
?>
    <?php
    // if (isset($_FILES['image']['tmp_name'])) {
    //     $retour = copy($_FILES['image']['tmp_name'], $_FILES['image']['name']);
    //     if($retour) {
    //         echo '<p>La image a bien été envoyée.</p>';
    //         echo '<img src="' . $_FILES['image']['tmp_name'] . '">';
    //     }
    // }
    ?>