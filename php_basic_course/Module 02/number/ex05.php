<?php
$number = '12,57';
$number = (int)$number;
var_dump($number);
echo '<br/>';

$number = '1.1';
$number = (float)$number;
var_dump($number);
echo '<br/>';
if (is_numeric($number)){
    echo 'Đây là kiểu số';
}