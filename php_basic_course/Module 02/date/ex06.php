<?php
$dateObject = date_create();
var_dump($dateObject); echo '<br/>';
$dateInterval = date_interval_create_from_date_string('1 days');
date_sub($dateObject, $dateInterval);
var_dump($dateObject);
echo '<br/>';
$dateStr = '06/23/2021 09:30:23';
$dateArr = date_parse($dateStr);
echo '<pre>';
print_r($dateArr);
echo '</pre>';

$dateStr = '23/06/2021';
$format = 'd/m/Y';
$dateArr = date_parse_from_format($format, $dateStr);
echo '<pre>';
print_r($dateArr);
echo '</pre>';