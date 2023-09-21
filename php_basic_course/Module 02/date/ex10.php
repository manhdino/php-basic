<?php
$timezoneObject = timezone_open('Africa/Blantyre');
echo timezone_name_get($timezoneObject);
echo '<br/>';

$timezone = date_default_timezone_get();
echo $timezone;
echo '<br/>';
$arr = timezone_location_get($timezoneObject);
echo '<pre>';
print_r($arr);
echo '</pre>';