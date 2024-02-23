<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutused 04</h1>

<form action="" method="GET">
    Lisa sünniaasta: <input type="number" name="aasta"
    min=1900 max=2100 require>
    <input type="submit" value="Leia juubel"><br>

</form>
    <?php

        if (!empty($_GET['aasta'])) {
            $aasta = $_GET['aasta'];
            $seeaasta = date('Y');
            $vanus = $seeaasta - $aasta;

            if ($vanus % 5 ==0) {
                echo "Ongi juubel";
            
        } else {
           echo "Ei ole juubel";
        }
    }



        
        


    ?>



    <h1>Harjutused 03</h1>
<!-- action = fail kuhu saadetakse 
    method = kuidas saadetakse, GET on avalik, POST on peidetud -->

    <form action="" method="GET">
        Toode 1: <input type="number" name="Toode1"> <br>
        Toode 2: <input type="number" name="Toode2"> <br>
        Toode 3: <input type="number" name="Toode3"> <br>

        <input type="submit" value="Arvuta">
    </form>
    <?php
//      Kui GET'iga saatsin siis tuleb GET'iga vastu võtta
        if (!empty($t1 = $_GET['Toode1']) && 
        !empty($t2 = $_GET['Toode2']) &&
        !empty ($t3 = $_GET['Toode3'])) {
            
                


        $t1 = $_GET['Toode1'];
        $t2 = $_GET['Toode2'];
        $t3 = $_GET['Toode3'];
        $kokku = $t1 + $t2 + $t3;

        echo "Toode1: $t1 tk <br>";
        echo "Toode2: $t2 tk <br>";
        echo "Toode3: $t3 tk <br>";
        echo "Kõik kokku: $kokku tk";
    }


    ?>




    <h1>Harjutused 02</h1>
    <?php

    $arv1 = 5;
    $arv2 = 2.2;
    $tehe = $arv1 / $arv2;
    $jaak =  $arv1 % $arv2;


    echo "Vastus: $tehe<br>";
    printf("Vastus: %0.2f <br>", $tehe);
    echo "Jääk = $jaak";


    
    
    ?>





    <h1>Harjutused 01</h1>
    <p>
    <?php
/*
    Harjutus 01
    8.2.24
    Lihtsalt harjutan

*/

        $enimi = "Krista";
        $pnimi = "Kutsar";
        $v = 26;
        $pikkus = 1.71;
        $hyydnimi ="KUTSAR";
        $lugu ='Justin Bieber - "Baby"';

        echo "Tere $enimi  \"$hyydnimi\"  $pnimi!<br>";
        echo "Vanus: $v<br>Pikkus: $pikkus<br>";
        echo 'Lemmik lugu on: '.$lugu; // punkt on kokkuliitmiseks
    
    ?>
    </p>
</body>
</html>