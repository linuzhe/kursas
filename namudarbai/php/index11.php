<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 paskaita: užduotis Index11 | Linos darbai  </title>  
 
</head>     
    
<body>            
    <h1>Skaičiuokime stačiakampio plotą</h1>
    <p>Įrašykite abi reikšmes ir spauskite mygtuką. <br>
    Tada pamatysite atsakymą.</p>
    <?php
        function plotas($a,$b) {
            return $a*$b; 
        }
        if(isset($_POST['submit'])){
            if($_POST['a'] && $_POST['b']){
                $atsakymas = plotas($_POST['a'], $_POST['b']);
                echo "Plotas yra $atsakymas";
            }else{?>
                <p style="color: red;" >Įrašykite abu skaičius.</p>
            <?php }
        }else{ 
    ?>                  
        <form action = "<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Ilgis: <input type="number" name="a" style = "width: 100px;"/> 
            <br>
            Plotis: <input type="number" name="b" style = "width: 100px;"/>
            <br>
            <br>
            <input type="submit" name="submit" value="Skaičiuoti">
        </form>  
                    
    <?php } ?>     

</body>
    
</html>
