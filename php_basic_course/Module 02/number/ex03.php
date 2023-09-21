<?php
$number = 11;
$checkNumber = filter_var($number, FILTER_VALIDATE_INT, [
    'options' => ['min_range'=>1, 'max_range'=>10]
]);
var_dump($checkNumber);