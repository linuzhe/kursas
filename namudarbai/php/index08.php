<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 paskaita: užduotis Index08 | Linos darbai  </title>  
</head>     
    
<body> 
    
    <div> 
        
        <h1>Temperatūros Vilniuje balandžio mėnesį:</h1>
    
        <?php    

        $temp = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);
        rsort($temp);      

        foreach($temp as $x => $temperatura)  {
            echo  'Balandžio ' . ($x+1) . ' Vilniuje buvo ' . $temperatura . ' laipsniai(-ių).';
            echo "<br>";
        }
        ?>    
 
<!--        UZDUOTIS NEBAIGTA    -->
    
        <!--
        - Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:
        - 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21.
        - Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
        - Patarimai:
        1. Naudok foreach ciklą.
        2. Naudok round( ), kad suapvalintum vidutinę temperatūrą.
        3. Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka.
        4. Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.
        -->
        
    </div>
        
</body>
    
</html>