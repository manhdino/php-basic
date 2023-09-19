<?php
//Kiểm tra và đếm số chẵn lẻ trong dãy từ 1 --> 100

$startIndex = 1;
$endIndex = 100;

$resEven = null;
$resOdd = null;

$cntEven = 0;
$cntOdd = 0;

for($index = $startIndex; $index <= $endIndex; $index++){
    if($index % 2 == 0){
        $resEven .= $index.' ';
        $cntEven++;
    }
    else{
        $resOdd .= $index.' ';
        $cntOdd++;
    }
}

if($cntEven){
    echo 'Found ' . $cntEven . ' EvenNumbers: '.$resEven.'<br />';
}
else{
    echo 'Not Found EvenNumbers'.'<br />';
}

if($cntOdd){
    echo 'Found ' . $cntOdd . ' OddNumbers: '.$resOdd.'<br />';
}
else{
    echo 'Not Found OddNumbers'.'<br />';
}