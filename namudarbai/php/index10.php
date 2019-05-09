<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 paskaita: užduotis Index10 | Linos darbai  </title>  
</head>     
    
<body> 
    
    <?php
        function plotas($a, $b) {
            $daugyba = $a * $b;
            return $daugyba;
        }
        $atsakymas = plotas(10, 20);
        echo "Atsakymas: $atsakymas";
    ?>
    
</body>
    
</html>
