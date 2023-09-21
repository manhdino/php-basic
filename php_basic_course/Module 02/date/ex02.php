<?php
/*
 * Hàm khởi tạo object timezone
 * Hàm khởi tạo object datetime
 * */
$timezoneObject = timezone_open('Asia/Ho_Chi_Minh');
var_dump($timezoneObject);

echo '<br/>';

$dateTimeObject = date_create(date('Y-m-d H:i:s'), $timezoneObject);
var_dump($dateTimeObject);

echo '<br/>';

$format = 'Ymd';
$dateTimeStr = '20210623';
$dateTimeObject = date_create_from_format($format, $dateTimeStr);
var_dump($dateTimeObject);