<?php
    if(empty($_POST["email"]) || empty($_POST["pass"]))
    {
        exit("Es gibt einen Fehler");
    }

    $email = $_POST["email"];
    $user_pass = $_POST["pass"];

    include("verbinden.php");

    $anfrage        = "SELECT * FROM users WHERE email='" . $email . "'";
    $result         = $verbindung->query($anfrage);
    
    if($result->num_rows == 0)
    {
        header("Location: loginPage.php?message= Diese E-mail Addresse ist nicht registrieret");
        exit();
    }
    else
    {
        $account = $result->fetch_assoc();

        if($account["passwort"] == $user_pass)
        {
            // ERFOLGREICH EINGELOGGT. Umleitung zur Startseite
            setcookie("eingeloggt", "1", 0, "/");
            setcookie("id", $account["id"], 0, "/");
            header("Location: index.php");
        }
        else
        {
            // PASSWORT IST FALSCH
            header("Location: loginPage.php?message=leider Sie können nicht einlogen");
        }
    }
    
    
    
    
    
    
    
    
    
    
    include("../close.php");

?>