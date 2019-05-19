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
            $temp2 = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);
            $suma = array_sum($temp); 
            $average = $suma / count($temp);                  
            rsort($temp2);
            echo '<h2>Didžiausia temperatūra buvo: ' . implode(', ', array_slice($temp2,0,5)) . ' laipsniai.<br> Mažiausia temperatūra: ' . implode(', ', array_slice($temp2,-5,5)) . ' laipsniai. </h2>';
        
            echo '<h2>Vidutinė balandžio temperatūra: ' . round($average) . ' laipsnių, nes:</h2>';
            foreach($temp as $x => $temperatura)  {
                echo  'balandžio ' . ($x+1) . ' Vilniuje buvo ' . $temperatura . ' laipsniai(-ių). <br>';
                }            
        ?> 
       
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