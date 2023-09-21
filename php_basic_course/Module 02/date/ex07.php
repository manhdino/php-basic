<?php
$dateObject = date_create();
var_dump($dateObject);
echo '<br/>';
date_modify($dateObject, '-1 month');
var_dump($dateObject);
echo '<br/>';