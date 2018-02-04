<?php
function getMeteo($ville)
{
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.openweathermap.org/data/2.5/forecast?q=$ville&APPID=c3f7a6d07cc3d1c418de82bced87b086",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Postman-Token: 4a329494-931b-ecec-01ba-110129f718de"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }
}
?>