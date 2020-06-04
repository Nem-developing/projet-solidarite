<!DOCTYPE html>
<!--
    Solidarité Bonaparte.
-->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Néhémie Barkia, Ilan Marrache, Dorian Rastello.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" href="../favicon.ico">
        <title>Les Vidéos</title>
        <link href="../css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <! -- Bandeau de page dynamique. -->
        <?php
          include '../includes/header.html';
        ?>

        
        
        <! -- Affichage des vidéos -->
        <div id="les-vids">
                <video width="320" height="240" controls>
                    <source src="../videos/Amandine Bedouet-Gaillard.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                <video width="320" height="240" controls>
                    <source src="../videos/Famille Roblin - merci aux soignants.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                <video width="320" height="240" controls>
                    <source src="../videos/Issam 2d8.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                <video width="320" height="240" controls>
                    <source src="../videos/teaser-du-projet-heros-du-quotidien.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
        </div>
        
        
        <div id="border">
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    
    <footer>
        <p>&copy;2020 Projet Solidarité <a href="https://github.com/IlanMarrache" class="link">Ilan Marrache</a> - <a href="https://github.com/Neyrim83" class="link">Dorian Rastello</a> - <a href="http://github.com/nem-developing/" class="link">Néhémie Barkia</a><p>
    </footer>
</html>
