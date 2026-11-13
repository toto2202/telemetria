<?php
   /*
    contaPacchettiPersi accetta un array di interi e restituisce un numero intero
   */
    function contaPacchettiPersi($pingGrezzi){
        $pacchettiPersi = 0;
        foreach($pingGrezzi as $ping){
            if($ping == -1){
                $pacchettiPersi++;
            }
        }
    }
   
   $pingGrezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];

    array_push($pingGrezzi, 55, 190, 12);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>