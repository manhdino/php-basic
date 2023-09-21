<?php
/*
 * 1. Hiển thị số chẵn, số lẻ trong dãy số từ: 1 2 4 5 ... 100
 *
 * */

$startIndex = 1;
$endIndex = 100;

$resultEven = null; //Số chẵn
$resultOdd = null; //Số lẻ

$evenCount = 0; //Đếm số chẵn
$oddCount = 0; //Đếm số lẻ

for ($index = $startIndex; $index<=$endIndex; $index++){

    //Kiểm tra số chẵn - lẻ
    if ($index % 2 == 0){
        //echo $index.' là số chẵn <br/>';
        $resultEven.=$index.' ';
        $evenCount++;
    }else{
        //echo $index.' là số lẻ <br/>';
        $resultOdd.=$index.' ';
        $oddCount++;
    }

}

if ($evenCount>0){
    echo 'Tìm thấy '.$evenCount.' số chẵn: '.$resultEven.'<br/>';
}else{
    echo 'Không tìm thấy số chẵn <br/>';
}

if ($oddCount>0){
    echo 'Tìm thấy '.$oddCount.' số lẻ: '.$resultOdd.'<br/>';
}else{
    echo 'Không tìm thấy số lẻ <br/>';
}


/*
 * 2. Tính giai thừa của 1 số và hiển thị kết quả
 *
 * Input: Nhập vào số N
 * Output: Hiển thị kết quả N!
 *
 * Công thức: N! = 1*2*3..*N (N>0)
 * */

$n = 10;
if ($n>0){
    //Xử lý tính giai thừa
    $result = 1; //Giả định = 1
    for ($index = 1; $index<=$n; $index++){
        $result*=$index;
    }
    echo $n.'! = '.$result.'<br/>';
}else{
    echo $n.' không hợp lệ<br/>';
}