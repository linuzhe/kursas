<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 paskaita: užduotis Index12 | Linos darbai  </title>  
 
</head>     
    
<body>            
    <h1>Sužinokime kuo Jūs vardu:</h1>
    <?php
      if(isset($_POST["submit"])){
            if($_POST['name'] && $_POST['surname']){
                echo "Dėkui. Jūs įrašėte, kad Jūsų vardas yra " . $_POST['name'] . ", o pavardė yra " . $_POST['surname'] . ".";
            }else{?>
                <p style="color: red;" >Įrašykite ir vardą, ir pavardę.</p>
            <?php }
        }else{ 
    ?>                  
        <form action = "<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Jūsų vardas: <input type='text' name='name' style = "width: 300px;"/> 
            <br>
            Jūsų pavardė: <input type='text' name='surname' style = "width: 300px;"/>
            <br>
            <br>
            <input type="submit" name="submit" value="Pateikti">
        </form>  
                    
    <?php } ?>     
</body>
    
</html>
