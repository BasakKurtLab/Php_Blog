<?php
    include("header.php");
    include("verbinden.php");
    
    $eingeloggt = false;
    $name = "";

if(isset($_COOKIE["eingeloggt"]) && $_COOKIE["eingeloggt"] == "1")
{
    $eingeloggt = true;
}
if(!empty($_COOKIE["id"]))
{
    $name = $verbindung->query("SELECT * FROM autoren WHERE id=".$_COOKIE["id"].";")->fetch_assoc()["name"];
}
?>

    <main>
        <section class="hero">
            <h1>Herzlich Willkommen  <?= $name ?></h1>
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