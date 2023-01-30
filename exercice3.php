<?php
function tempConversionC($temperature){
    $fahrenheit = $temperature * 9 / 5 + 32;
    return $fahrenheit;
}

function tempConversionK($temperature){
    $kelvin = $temperature + 273.15;
    return $kelvin;
}

$temperature = 100;

echo $temperature. "°C is equal to " . tempConversionC($temperature) . "°F and " . tempConversionK($temperature) . " K"
?>