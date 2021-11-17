<?php
    include("header.php");
?>

    <main>
        <section class="hero">
            <h1>Herzlich Willkommen</h1>
        </section>
        
        <section class="einleitung">
            <h3>Wer bin ich?</h3>
            <p>
                <?= "dynamischer Text von Datenbank" ?>
            </p>
            <a href="uber-mich.php">Weiterlesen</a>
        </section>

        <section class="beratung">
            <h3>Kostenlose Beratung</h3>
            <p>
                ...
            </p>
            <a href="kontakt.php">Jetzt kostenlos beraten lassen!</a>
        </section>
    </main>

    

<?php
    include("footer.php");
?>