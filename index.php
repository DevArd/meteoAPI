<!DOCTYPE html>
<html>
    <head>
        <?php require "./require/head.html" ?>
    </head>
    <body>

        <div class="container">
            <!-- NavBar -->
            <?php require "./require/navbar.html" ?>

            <div class="row" id="searchAndMap">
                <!-- Search and Map -->
                <?php require "./require/searchAndMap.html" ?>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZgi02r2AvJ-5IizK_xSNmsyjt61bgs4E&callback=initMap" async defer></script>

    </body>
</html>