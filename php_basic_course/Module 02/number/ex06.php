<?php
//1. Lấy trị tuyệt đối
$number = -10;
$number = abs($number);
echo $number.'<br/>';

//2. Làm tròn
$number = 1.555;
echo round($number, 2).'<br/>';

//3. Làm tròn lên
$number = 2.1;
echo ceil($number).'<br/>';

//4. Làm tròn xuống
$number = 2.9;
echo floor($number).'<br/>';

//5. Lấy số ngẫu nhiên
$random = rand(1,100);
echo $random.'<br/>';

//6. Định dạng số
$number = 1000000.55; //1 triệu
echo number_format($number, 1, ',', ' ');