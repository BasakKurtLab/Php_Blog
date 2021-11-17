<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Neuen Beitrag erstellen:

    <form method="POST" action="request.php">
        <input type="text" placeholder="Titel" name="post_titel"><br>
        <textarea type="text" placeholder="Inhalt" name="post_inhalt"></textarea>
        <input type="submit" name="new_post" value="Erstellen">
    </form>
</body>
</html>