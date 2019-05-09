<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 paskaita: užduotis Index07 | Linos darbai  </title>  
</head> 
    
    
<body>
    <?php    
         $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];  
     ?>

    <div>    
        <hi>Miestai</hi>
        <ul>
            <?php
             echo count($cities4);
             
             for($i = 0; $i < count($cities4); $i++) {
                 echo "<li>$cities4[$i]</li>";
             }
            ?>       
        </ul>  
        <ul>
            <?php
                          
             foreach($cities4 as $miestas) {
                 echo $miestas . '<br>';
             }
            ?>  
               
        </ul>  
    </div>
    
</body>
    
</html>
