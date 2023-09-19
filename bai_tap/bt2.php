<?php
// Tính giai thừa của sô N

$N = 0;
$res = 1;

if($N <= 0){
    echo 'Invalid number';
}
else{
    for($index = 1;$index <= $N;$index++){
        $res *= $index;
    }
    echo $N.'! = ' . $res;
}

