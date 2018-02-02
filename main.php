<?php 
    include "callApi.php"; 
    $meteo = getMeteo($_POST["ville"]);
    echo $meteo['weather']['0']['description'];

    function afficerMeteo($meteo)
    {

    }
?>