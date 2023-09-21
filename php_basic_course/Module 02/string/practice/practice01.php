<?php
//$str = 'Hoc lap trinh tai Unicode';
//$str = 'Học lập trình tại Unicode';
/*
 * Bản chất của chuỗi là 1 mảng ký tự
 * Muốn lấy 1 ký tự, dùng cú pháp: $bienchuoi[chiso]
 * chiso: Bắt đầu từ 0 (Từ trái qua phải)
 * */

//for ($i = 0; $i<mb_strlen($str, 'UTF-8'); $i++){
//    //echo $str[$i].'<br/>';
//    echo mb_substr($str, $i, 1, 'UTF-8').'<br/>';
//}

/*
 * Bài 1: Viết chương trình lấy username của 1 email
 * Input: hoangan.web@gmail.com
 * Ouput: hoangan.web
 * */

//Input
$emailInput = 'contact@unicode.vn';

//Xử lý
$endEmail = strstr($emailInput, '@');
$userName = str_replace($endEmail, '', $emailInput);

//$userName = strstr($emailInput, '@', true);

//Output
echo $userName.'<br/>';

/*
 * Bài 2: Viết chương trình lấy 5 ký tự cuối chuỗi
 *
 * */
$strInput = 'Học lập trình';
$endStr = mb_substr($strInput, -5, null, 'UTF-8');
echo '5 ký tự cuối chuỗi: '.$endStr.'<br/>';

/*
 * Bài 3: Viết chương trình xoá chữ đầu tiên trong chuỗi
 * Input: Tạ Hoàng An
 * Output: Hoàng An
 * */

$strInput = 'Học lập trình PHP tại Unicode';

//Xử lý
$positionSpace = mb_strpos($strInput, ' ', null, 'UTF-8');
//$firstWord = mb_substr($strInput, 0, $positionSpace+1, 'UTF-8');

//$strInput = str_replace($firstWord, '', $strInput);

$leftLength = mb_strlen($strInput, 'UTF-8')-($positionSpace+1);

$endWord = mb_substr($strInput, $positionSpace+1, $leftLength);

$strInput = $endWord;

//Output
echo $strInput.'<br/>';

/*
 * Bài 4: Viết chương trình đảo ngược chữ đầu và chữ cuối trong chuỗi
 *
 * */

$strInput = 'Học lập trình PHP Học tại Unicode';

//Xử lý chuỗi
//1. Lấy chữ đầu tiên
$positionSpaceFirst = mb_strpos($strInput, ' ', null, 'UTF-8');
$firstWord = mb_substr($strInput, 0, $positionSpaceFirst, 'UTF-8');

//2. Lấy chữ cuối cùng
$positionSpaceEnd = mb_strripos($strInput, ' ', null, 'UTF-8');
$leftLength = mb_strlen($strInput, 'UTF-8')-$positionSpaceEnd;
$endWord = mb_substr($strInput, $positionSpaceEnd+1, $leftLength, 'UTF-8');

//3. Chèn và thay thế

//Lấy nội dung giữa chuỗi
$middleWord = mb_substr($strInput, $positionSpaceFirst, $positionSpaceEnd-$positionSpaceFirst+1, 'UTF-8');

//Chèn và đổi chỗ
$strInput = $endWord.$middleWord.$firstWord;

//Output
echo $strInput.'<br/>';

