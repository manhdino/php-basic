<?php
//Kiểm tra 1 số nguyên có phải là số nguyên tố hay không

$N = 11;
$flag = true;
if($N <= 1){
    echo 'N is not a prime number';
}else{
    for($index = 2;$index <= $N - 1;$index++){
        if($N % $index == 0){
            $flag = false;
            break;
        }
    }

    if($flag){
        echo $N . ' is a prime number';
    }
    else{
        echo  $N . ' is not a prime number';
    }
}