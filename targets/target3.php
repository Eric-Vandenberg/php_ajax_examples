<?php
$icon = 'http://icons.iconarchive.com/icons/icons-land/weather/256/Sunny-icon.png';
$weather = 'sunny';
$temperature = '70 degrees';
$html = "
    <div class='loaded_content'>
        The weather is $weather and $temperature
        <img src='$icon' style='float:right'>
    </div>";
echo $html;
?>