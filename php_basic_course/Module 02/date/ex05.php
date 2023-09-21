<?php
$dateObject = date_create('2021-06-23 00:00:00');
var_dump($dateObject); echo '<br/>';
date_time_set($dateObject, 9, 17, 50);
var_dump($dateObject);