<?php
$dateStart = '2021-06-23';
$dateEnd = '2021-07-30';
$dateStartObject = date_create($dateStart);
$dateEndObject = date_create($dateEnd);
$interval = date_diff($dateStartObject, $dateEndObject);
echo $interval->format('%m tháng %d ngày');