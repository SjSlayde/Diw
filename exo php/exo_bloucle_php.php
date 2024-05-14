<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* th , td{
            border: 1px black solid;
        } */
    </style>
</head>
<body>
    <?php 
    for ($i=0;$i<150;$i++){
       if($i%2!=0)
       {
        echo $i.",";
       }
    } 
    for ($i=0;$i!=5;$i++){//limiter la boucle car flemme des 500 fois
        echo "Je dois faire des sauvegardes régulières de mes fichiers.".$i ."<br>";
    }
    $N =0;
    ?>
    <table class="table table-bordered justify-content-center">
        <thead>
            <tr>
                <?php
    for ($i=0;$i!=10;$i++){
    $C = $N + $i ;
    echo "<th>".$C."</th>";
    }   ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $N =1;
            for($i=1;$i!=10;$i++){
                if($i==1){
                    echo "<tr>";
                    echo "<th class=\"m-1\">".$N."</th>";
                }
                echo "<td>".$N*$i."</td>";
                if($i==9 and $N<9){
                    $N++;
                    $i=0;
                    echo "</tr>";
                }//exo table de multiplication
                }
            
                $Moisjour = array("Janvier"=>31, "Février"=>28, "Mars"=>31, "Avril"=>30, "Mai"=>31, "Juin"=>30, "Juillet"=>31, "Aout"=>31, "Septembre"=>30, "octobre"=>31, "Novembre"=>30, "Decembre"=>31); 
                arsort($Moisjour);
               
                foreach ($Moisjour as $mois => $jour) {
                    echo "Au mois de ".$mois." il y a :".$jour.".<br>";//exo tableau
                }
           ?>
    </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>