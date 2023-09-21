<?php
//$number = '100.000';
//$number = str_replace('.', '', $number);

$number = '100.000,05';
$number = str_replace('.', '', $number);
$number = str_replace(',', '.', $number);

if (is_numeric($number)){
    echo 'Là kiểu số';
}else{
    echo 'Không là kiểu số';
}
echo '<br/>';
echo 'Tổng: '.($number+200000);