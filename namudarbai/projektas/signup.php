<?php
    include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper-signup">
    </div>
</section>

<section class="main-container">
    <div class="main-wrapper-signup">
        <h2>Registruokitės</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="Vardas" />
            <input type="text" name="last" placeholder="Pavardė" />
            <input type="text" name="email" placeholder="El. paštas" />
            <input type="text" name="uid" placeholder="Prisijungimo vardas" />
            <input type="text" name="pwd" placeholder="Slaptažodis" />
            <button type="submit" name="submit">Registruotis</button>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>