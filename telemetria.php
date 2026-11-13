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
        return contaPacchettiPersi;
    }

    /*
    pacchettiValidi accetta un array di interi e restituisce un array di interi
    */
    function pacchettiValidi($pingGrezzi){
        $pingValidi = [];
        foreach ($pingGrezzi as ping){
            if($ping > 0){
                $pingValidi[] = $ping;
            }
        }

        return $pingValidi;

    }

    /*
    calcolooTempoMedio accetta un array
    */
    function calcoloTempoMedio($pingValidi){
        $somma = 0;
        $cont = 0;
        $media = 0;

        foreach($pingValidi as $ping){
            $somma += $ping;
            $cont++;
        }

        $media = $somma / $cont;

        return round($media, 2);
    }

    function calcoloMaxMin($pingValidi, &$min, &$max){
        $min = $pingValidi[0];
        $max = $pingValidi[0];

        foreach($pingValidi as $ping){
            if($ping > $max) $max = $ping;
            if($ping > $min) $min = $ping;

        }


    }




   $pingGrezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];

    array_push($pingGrezzi, 55, 190, 12);

    $pingValidi = pacchettiValidi($pingGrezzi);
    $tampoMedio = calcoloTempoMedio($pingValidi);
    $pingMax = 0;
    $pingMin = 0;

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