<?php
    include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper-content">         
     <img src="images/chair-series-pixabay.jpg" alt="chairs" width="100%"> 
            
            
        <?php
            if(isset($_SESSION['u_id'])) {
                echo "<p>Prisijungėte sėkmingai.</p>";
            }
        ?>
    </div>
</section>
<?php
    include_once 'footer.php';
?>