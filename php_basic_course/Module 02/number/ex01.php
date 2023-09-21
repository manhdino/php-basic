<?php
$number = ' 200,250 000.567 ';
//Thay thế chuỗi để xoá dấu ,
$number = str_replace(',', '', $number);
$number = str_replace(' ', '', $number);
$number = trim($number);
$checkNumber = is_numeric($number); //Check cả số nguyên, số thực, chuỗi số
if ($checkNumber){
    echo 'Đây là kiểu số';
}else{
    echo 'Đây không phải kiểu số';
}