<?php
switch ($_POST['location'])
{
    case 'Irvine, Ca':
        $icon = 'http://iconbug.com/data/fc/128/0d9e5bce7b03de8e11bcb100741f57fb.png';
        $temperature = '60 degrees';
        $weather = 'partly cloudy';
        break;
    case 'Woodland Hills, Ca':
        $icon = 'http://icons.iconarchive.com/icons/icons-land/weather/256/Sunny-icon.png';
        $temperature = '80 degrees';
        $weather = 'sunny';
        break;
    case 'San Diego, Ca':
        $icon = 'http://nystire.com/DriveIn_Cloud/weather_showers_scattered_250.png';
        $temperature = '50 degrees';
        $weather = 'raining';
        break;
}

$html = "
    <div class='loaded_content'>
        The weather is $weather and $temperature
        <img src='$icon' style='float:right'>
    </div>";
$output_array = ['success'=>true, 'message'=>'Here is your forecast!', 'html'=>$html];
$output_string = json_encode($output_array);
echo $output_string;
?>