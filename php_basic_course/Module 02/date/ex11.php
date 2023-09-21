<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDate = date('Y-m-d H:i:s');
echo $currentDate;
$currentTimestamp = strtotime($currentDate);
echo $currentTimestamp.'<br/>';
$endDateTimestamp = strtotime('+1 month', $currentTimestamp);
echo date('Y-m-d H:i:s', $endDateTimestamp);

if (date('Y-m-d H:i:s')>=date('Y-m-d H:i:s', $endDateTimestamp)){
    //Khoá tài khoản
}