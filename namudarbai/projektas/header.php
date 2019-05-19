<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renginio pavadinimas | Linos projektas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">    
</head>

    <body>
      <header class="header" id="header">   
        <div class= "top">           
        
               <div class="menu">
                 <ul> 
                     <li><a href="index.php"><img src="images/logo.png" alt="logo" width="120"></a></li>
                     <li><a href="index.php">Apie renginį</a></li>
                     <li><a href="programa.php">Programa</a></li>
                     <li><a href="komanda.php">Komanda</a></li>
                     <li><a href="kaina.php">Kaina</a></li>
                     
                     <li><a href="registracija.php">Registracija</a></li>                                      
                     <li><a href="signup.php"><?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Logout</button></form>';
                            } else {
                                echo '<form action="includes/login.inc.php" method="post">
                                <input type="text" name="uid" placeholder="Prisijungimo vardas" /> 
                                <input type="password" name="pwd" placeholder="Slaptažodis" />
                                <button type="submit" name="submit">Prisijungti</button>
                                </form>';
                            }
                        ?></a></li>
                     <li><a href="kontaktai.php">Kontaktai</a></li>                     
                   
                 </ul>
            </div>        
          </div>
        </header>