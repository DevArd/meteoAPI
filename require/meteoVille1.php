<?php 
$meteo1 = getMeteo($_POST["ville1"]);
$meteo1= json_decode($meteo1, true);
?>

<div class="card text-center text-white bg-secondary mb-3">
    <div class="card-header">
        <h4><?php echo $meteo1["city"]["name"].", ".$meteo1["city"]["country"]  ?></h4>
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text-white active" id="now-tab" data-toggle="tab" href="#now" role="tab" aria-controls="now" aria-selected="true">Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+1-tab" data-toggle="tab" href="#j+1" role="tab" aria-controls="j+1" aria-selected="false">J+1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+2-tab" data-toggle="tab" href="#j+2" role="tab" aria-controls="j+2" aria-selected="false">J+2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+3-tab" data-toggle="tab" href="#j+3" role="tab" aria-controls="j+3" aria-selected="false">J+3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+4-tab" data-toggle="tab" href="#j+4" role="tab" aria-controls="j+4" aria-selected="false">J+4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+5-tab" data-toggle="tab" href="#j+5" role="tab" aria-controls="j+5" aria-selected="false">J+5</a>
            </li>
        </ul>
    </div>
    <div class="card-body tab-content" id="myTabContent">
        <!-- Données météo -->

        <!-- Météo Now -->
        <div class="tab-pane fade show active" id="now" role="tabpanel" aria-labelledby="now-tab">    
            <h4><?php echo $meteo1['list'][0]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][0]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][0]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][0]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][0]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][0]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][0]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][0]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][0]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][0]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+1 -->
        <div class="tab-pane fade" id="j+1" role="tabpanel" aria-labelledby="j+1-tab">
            <h4><?php echo $meteo1['list'][8]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][8]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][8]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][8]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][8]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][8]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][8]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][8]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][8]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][8]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+2 -->
        <div class="tab-pane fade" id="j+2" role="tabpanel" aria-labelledby="j+2-tab">
            <h4><?php echo $meteo1['list'][16]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][16]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][16]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][16]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][16]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][16]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][16]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][16]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][16]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][16]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+3 -->
        <div class="tab-pane fade" id="j+3" role="tabpanel" aria-labelledby="j+3-tab">
            <h4><?php echo $meteo1['list'][24]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][24]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][24]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][24]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][24]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][24]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][24]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][24]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][24]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][24]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+4 -->
        <div class="tab-pane fade" id="j+4" role="tabpanel" aria-labelledby="j+4-tab">
            <h4><?php echo $meteo1['list'][32]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][32]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][32]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][32]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][32]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][32]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][32]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][32]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][32]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][32]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+5 -->
        <div class="tab-pane fade" id="j+5" role="tabpanel" aria-labelledby="j+5-tab">
            <h4><?php echo $meteo1['list'][39]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo1['list'][39]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo1['list'][39]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo1['list'][39]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo1['list'][39]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo1['list'][39]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo1['list'][39]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo1['list'][39]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo1['list'][39]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo1['list'][39]['wind']['speed'].' m/s'; ?>
            </p>
        </div>
    </div>
</div>