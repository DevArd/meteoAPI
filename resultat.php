<!DOCTYPE html>
<html>
    <head>
        <?php require "./require/head.html" ?>
    </head>
    <body>    
        <div class="container">
            <?php include "api.php"; ?>

            <!-- NavBar -->
            <?php require "./require/navbar.html" ?>

            <div class="row" id="searchAndMap">
                <!-- Search and Map -->
                <?php require "./require/searchAndMap.html" ?>
            </div>

            <!-- Résultats de la comparaison -->
            <div class="row" id="dataMeteo">
                <div class="col"> 
                    <!-- Ville 1 -->
                    <?php
                    if (empty($_POST["ville1"])) {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                        Veuillez saisir une ville !
                        </div>";
                    } else {
                        $ville1=$_POST["ville1"];
                        // Appel Api
                        $meteo1 = getMeteo($ville1);
                        $meteo1= json_decode($meteo1, true);
                        // Si la ville n'existe pas msg d'erreur sinon on affiche la météo
                        if (($meteo1["cod"] === "404") || ($meteo1["cod"] === "400")) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                            Veuillez saisir une ville valide !
                            </div>";
                        }else{
                            require "./require/meteoVille1.php";
                        }
                    }
                    ?>
                </div>

                <div class="col"> 
                    <!-- Ville 2 -->
                    <?php
                    if (empty($_POST["ville2"])) {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                        Veuillez saisir une ville !
                        </div>";
                    } else {
                        $ville2=$_POST["ville2"];
                        // Appel Api
                        $meteo2 = getMeteo($ville2);
                        $meteo2 = json_decode($meteo2, true);
                        // Si la ville n'existe pas msg d'erreur sinon on affiche la météo
                        if (($meteo2["cod"] === "404") || ($meteo2["cod"] === "400")) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                            Veuillez saisir une ville valide !
                            </div>";
                        }else{
                            require "./require/meteoVille2.php";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZgi02r2AvJ-5IizK_xSNmsyjt61bgs4E&callback=placeMarker" async defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>