<?php
    function getMeteo($ville)
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$ville&APPID=c3f7a6d07cc3d1c418de82bced87b086";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
?>