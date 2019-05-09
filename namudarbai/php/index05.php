<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 paskaita: užduotis Index05 | Linos darbai  </title>  
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
         
        $cities2['Londonas'] = 8.6;
        $cities3 = [
            'Tokijas' => [13.6, 1868, 'Japonija'],
            'Vasingtonas' => [0.6, 1790, 'JAV'],
            'Maskva' => [11.5, 1147, 'Rusija']        
        ];
        
        $cities3['Londonas'] = [8.6, 43, 'Anglija']; 
    ?>

    <div>    
        <p><?php print_r($cities3); ?></p>       
        <p><?php echo $cities[2]; ?></p>  
        
        <ul>
            <li><?php echo 'Gyventojų skaičius: ' . $cities3['Londonas'][0] . ' mln.'; ?></li>  
            <li><?php echo 'Įkurtas: ' . $cities3['Londonas'][1] . ' m.'; ?></li> 
            <li><?php echo 'Šalis: ' . $cities3['Londonas'][2]; ?></li> 
        </ul>
        
    </div>
    
</body>
    
</html>
