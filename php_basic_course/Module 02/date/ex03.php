<?php
$dateObject = date_create();
var_dump($dateObject); echo '<br/>';
$timeZoneObject = timezone_open('Asia/Ho_Chi_Minh');
date_timezone_set($dateObject, $timeZoneObject);
var_dump($dateObject);
echo '<br/>';
$timeZoneCurrent = date_timezone_get($dateObject);
var_dump($timeZoneCurrent);