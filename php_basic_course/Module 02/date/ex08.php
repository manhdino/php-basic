<?php
$dateInput = '2021-06-23 15:30:30';
echo $dateInput.'<br/>';
$dateObject = date_create($dateInput);
var_dump($dateObject);
echo '<br/>';
$d = date_format($dateObject, 'd');
$m = date_format($dateObject, 'm');
$y = date_format($dateObject, 'Y');
$h = date_format($dateObject, 'H');
$m = date_format($dateObject, 'i');
$s = date_format($dateObject, 's');
echo 'Ngày '.$d.' tháng '.$m.' năm '.$y.' '.$h.' giờ '.$m.' phút '.$s.' giây';
echo '<br/>';
echo $dateObject->format('d/m/Y H:i:s');