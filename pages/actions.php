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
        <title>Les actions solidaires</title>
        <link href="../css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <! -- Bandeau de page dynamique. -->
        <?php
          include '../includes/header.html';
        ?>

                
        <! -- Caroussel (Slide Show) -->
         
        <div class="car-class">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <center>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/les_actions_solidaires/Marc Duran - Proviseur - Participation à la course Tous unis contre le Virus 1.jpg" class="d-block w-10" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/les_actions_solidaires/Marc Duran - Proviseur - Participation à la course Tous unis contre le Virus.jpg" class="d-block w-10" alt="...">
            </div>
                </center>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>

        </div>
        

        <! -- Affichage des images -->
        <div class="card-group">
            <div class="card">
                <img src="./../images/les_actions_solidaires/Marc Duran - Proviseur - Participation à la course Tous unis contre le Virus 1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="./../images/les_actions_solidaires/Marc Duran - Proviseur - Participation à la course Tous unis contre le Virus.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        



        <div id="border">
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    
    <footer>
        <p>&copy;2020 Projet Solidarité - <a href="https://github.com/IlanMarrache">Ilan Marrache</a> - <a href="https://github.com/Neyrim83">Dorian Rastello - <a href="http://github.com/nem-developing/">Néhémie Barkia</a><p>
    </footer>
</html>
