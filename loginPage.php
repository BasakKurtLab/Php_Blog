<?php
    include("header.php");
?>

    <main>
    <h1>Anmelden</h1>

    <form method="POST" action="login.php">
        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="submit" value="Einloggen">
    </form>

    </main>

<?php
    include("sidebar.php");

    include("footer.php");
?>






