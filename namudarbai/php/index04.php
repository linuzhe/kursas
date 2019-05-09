<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 paskaita: užduotis Index04 | Linos darbai  </title>  
</head> 
    
    
<body>
    <?php    
         $cities = ['Berlynas', 'Roma', 'Londonas'];
    
         $cities[] = 'Tokijas';
             
         $cities2 = [
             'Tokijas' => 13.6, 
             'Vašingtonas' => 0.6, 
             'Maskva' => 11.5           
         ];   
         
        $cities2[] = 'Londonas => 8.6';
    ?>

    <div>    
        <p><?php print_r($cities); ?></p>  
        <p><?php print_r($cities2); ?></p> 
        
        <ul>
            <li><?php echo $cities[1]; ?></li>              
        </ul> 
        
        <ul>
            <li><?php echo 'Gyventojų skaičius: ' . $cities2['Tokijas'] . ' mln.'; ?></li>  
            <li><?php echo 'Gyventojų skaičius: ' . $cities2['Vašingtonas'] . ' mln.'; ?></li> 
            <li><?php echo 'Gyventojų skaičius: ' . $cities2['Maskva'] . ' mln.'; ?></li> 
        </ul>
        
    </div>
    
</body>
    
</html>
