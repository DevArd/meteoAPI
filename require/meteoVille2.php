<div class="card text-center text-white bg-dark mb-3">
    <div class="card-header">
        <h4><?php echo $meteo2["city"]["name"].", ".$meteo2["city"]["country"]  ?></h4>
        <small id="coord2">
            <?php echo "coord. <span id=\"coord2lat\">".$meteo2["city"]["coord"]["lat"]."</span>, <span id=\"coord2lon\">".$meteo2["city"]["coord"]["lon"]."</span>" ?>
        </small>
        <ul class="nav nav-pills card-header-pills justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text-white active" id="now-tab-2" data-toggle="tab" href="#now-2" role="tab" aria-controls="now" aria-selected="true">Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+1-tab-2" data-toggle="tab" href="#j+1-2" role="tab" aria-controls="j+1" aria-selected="false">J+1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+2-tab-2" data-toggle="tab" href="#j+2-2" role="tab" aria-controls="j+2" aria-selected="false">J+2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+3-tab-2" data-toggle="tab" href="#j+3-2" role="tab" aria-controls="j+3" aria-selected="false">J+3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+4-tab-2" data-toggle="tab" href="#j+4-2" role="tab" aria-controls="j+4" aria-selected="false">J+4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="j+5-tab-2" data-toggle="tab" href="#j+5-2" role="tab" aria-controls="j+5" aria-selected="false">J+5</a>
            </li>
        </ul>
    </div>
    <div class="card-body tab-content" id="myTabContent">
        <!-- Données météo -->

        <!-- Météo Now -->
        <div class="tab-pane fade show active" id="now-2" role="tabpanel" aria-labelledby="now-tab-2">    
            <h4><?php echo $meteo2['list'][0]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][0]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][0]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][0]['main']['temp']-273,15 ." C°"; ?><br/>
                Temp. Max : <?php echo $meteo2['list'][0]['main']['temp_max']-273,15 ." C°"; ?><br/>
                Temp. Min : <?php echo $meteo2['list'][0]['main']['temp_min']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][0]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][0]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][0]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][0]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+1 -->
        <div class="tab-pane fade" id="j+1-2" role="tabpanel" aria-labelledby="j+1-tab-2">
            <h4><?php echo $meteo2['list'][8]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][8]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][8]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][8]['main']['temp']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][8]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][8]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][8]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][8]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+2 -->
        <div class="tab-pane fade" id="j+2-2" role="tabpanel" aria-labelledby="j+2-tab-2">
            <h4><?php echo $meteo2['list'][16]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][16]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][16]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][16]['main']['temp']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][16]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][16]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][16]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][16]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+3 -->
        <div class="tab-pane fade" id="j+3-2" role="tabpanel" aria-labelledby="j+3-tab-2">
            <h4><?php echo $meteo2['list'][24]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][24]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][24]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][24]['main']['temp']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][24]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][24]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][24]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][24]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+4 -->
        <div class="tab-pane fade" id="j+4-2" role="tabpanel" aria-labelledby="j+4-tab-2">
            <h4><?php echo $meteo2['list'][32]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][32]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][32]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][32]['main']['temp']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][32]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][32]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][32]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][32]['wind']['speed'].' m/s'; ?>
            </p>
        </div>

        <!-- Météo J+5 -->
        <div class="tab-pane fade" id="j+5-2" role="tabpanel" aria-labelledby="j+5-tab-2">
            <h4><?php echo $meteo2['list'][38]['dt_txt']; ?></h4>
            <h5>
                <img src="https://openweathermap.org/img/w/<?php echo $meteo2['list'][38]['weather'][0]['icon'] ?>.png" alt="temps">
                <?php echo $meteo2['list'][38]['weather'][0]['description']; ?>
            </h5>
            <p>
                Température : <?php echo $meteo2['list'][38]['main']['temp']-273,15 ." C°"; ?><br/>
                Humidité : <?php echo $meteo2['list'][38]['main']['humidity'].' %'; ?><br/>
                Pression : <?php echo $meteo2['list'][38]['main']['pressure'].' hpa'; ?><br/>
                Nuages : <?php echo $meteo2['list'][38]['clouds']['all'].' %'; ?><br/>
                Vent : <?php echo $meteo2['list'][38]['wind']['speed'].' m/s'; ?>
            </p>
        </div>
    </div>
</div>