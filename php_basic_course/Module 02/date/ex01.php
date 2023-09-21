<?php
/*
Xử lý thời gian trong PHP
- Timestamp: Tính từ 00:00:00 1/1/1970 đến thời điểm cần xác định
- Định dạng thời gian
- Timezone
- Đối tượng thời gian (DateTime Object)
*/
date_default_timezone_set('Asia/Ho_Chi_Minh');

//1. Hàm time()
$timestamp = time();
echo 'Timestamp: '.$timestamp.'<br/>';

//2. Hàm strtotime()

$dateStr = '2021-06-22 23:59:59';
$timestamp = strtotime($dateStr);
echo 'Convert '.$dateStr.' to timestamp: '.$timestamp.'<br/>';

//3. Hàm strftime()
echo 'Timestamp: '.$timestamp.'<br/>';
$datetime = strftime('%d/%m/%Y %H:%M:%S', $timestamp);
echo $datetime.'<br/>';

//4. Hàm mktime()
$datetime = mktime(15, 30, 40, 06, 23, 2021);
var_dump($datetime);
echo '<br/>';

//5. Hàm microtime()
$microtime = microtime(true);
echo $microtime.'<br/>';

//6. Hàm localtime()
$localTime = localtime($timestamp, true);
echo '<pre>';
print_r($localTime);
echo '</pre>';

echo 'Ngày hôm nay: '.$localTime['tm_mday'].'<br/>';

//7. Hàm idate()
$time = idate('Y', $timestamp);
echo $time.'<br/>';

//8. Hàm gmmktime()
$time = gmmktime(15, 30, 50);
echo $time.'<br/>';

//9. Hàm gmdate()
$time = gmdate('Y-m-d H:i:s', $timestamp);
echo $time;

//10. Hàm getdate()
$timeArr = getdate($timestamp);
echo '<pre>';
print_r($timeArr);
echo '</pre>';

//11. Hàm date()
$now = date('Y-m-d H:i:s', $timestamp);
echo $now;