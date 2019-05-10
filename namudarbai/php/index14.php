<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 4 paskaita: užduotis Index14 | Linos darbai  </title>  
</head>     
    
<body>
    
    <?php    
         $metai= 2015;       
     ?>
    
    <?php         
            if ($metai >= date('Y')) {
                echo '&#169;  '. date('Y'); 
            } else {
                echo '&#169;  ' . $metai . "-" . date('Y'); 
            }   
    ?>        
</body>
    
</html>