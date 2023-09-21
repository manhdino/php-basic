<?php
$dateObject = date_create();
var_dump($dateObject);
echo '<br/>';
$timestamp = strtotime('2021-06-23 12:00:00');
date_timestamp_set($dateObject, $timestamp);
var_dump($dateObject);
echo '<br/>';
echo $timestamp; echo '<br/>';
echo date_timestamp_get($dateObject);