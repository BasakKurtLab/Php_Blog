<?php
    include("verbinden.php");
    include("header.php");

    if(!empty($_GET["id"]))
    {
        $autor_id = $_GET["id"];
    }
?>

<main>
    <?php
        if(!isset($autor_id))
        {
            echo("Autor nicht gefunden.");
        }
        else
        {
            $anfrage = "SELECT * FROM autoren WHERE id=" . $autor_id;
            $result = $verbindung->query($anfrage);

            if($result->num_rows == 0)
            {
                echo("Autor nicht gefunden.");
            }
            else
            {
                $autor_row = $result->fetch_assoc(); // Autor row

                

                 ?>
                 
                 <span>Autor: <?= $autor_row["name"] ?></span>
                 <hr>

                 <?php
                 
                 $anfrage = "SELECT * FROM posts WHERE autor=" . $autor_id;
                 $result = $verbindung->query($anfrage);


                while($row = $result->fetch_assoc()) // post row

                {

            
                     ?>
                     

                     <li><a href="post.php?id=<?= $row["id"] ?>"><?= $row["titel"] ?></a></li>

                    

                <?php
                }

               
            }
        }
        ?>
</main>


<?php
    include("sidebar.php");

    include("footer.php");
    include("close.php");
?>