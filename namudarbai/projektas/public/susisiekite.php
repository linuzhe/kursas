<?php
    require __DIR__ . '/../src/app.php';
    include_once '../views/header.php';
?> 

<section id="contacts">
<!--   LS: Reiktų sutvarkyti kontaktus, žemėlapį su googlemaps api pateikti ir pan.-->
    <form id="contact" action="susisiekite.php" method="post">

        <div>        
            <h1>Susisiekite</h1>
        </div >      

        <div class="columns-contacts">
            <ul class="contacts">
                <li class="columns-grey"><input type="text" name="name" required autofocus placeholder="Vardas, pavardė" /></li>
                <li class="columns-grey"><input type="text" name="company" required autofocus placeholder="Įmonės pavadinimas" /></li>
                <li class="columns-grey"><input type="email" name="email" required  placeholder="El. paštas" /></li>  
                <li class="columns-grey" id="message"><textarea name="message" required placeholder="Jūsų pageidavimai..." ></textarea></li> 
                <li class="columns-grey"><button name="submit" id="contact-submit" class="button">Išsiųsti</button></li>
             </ul>                     
        </div> 
    </form>
    
</section>
    
<?php
    include_once '../views/footer.php';
?>


