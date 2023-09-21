<?php
$number = 1;
$checkNumber = is_int($number); //Kiểm tra số nguyên
if ($checkNumber){
    echo 'Đây là kiểu số nguyên';
}else{
    echo 'Đây không phải kiểu số nguyên';
}

echo '<br/>';

$number = 1.0;

$checkNumber = is_float($number); //Kiểm tra số thực
if ($checkNumber){
    echo 'Đây là kiểu số thực';
}else{
    echo 'Đây không phải kiểu số thực';
}