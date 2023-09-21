<?php
/*Các hàm xử lý chuỗi*/
$str = 'Trung tâm đào tạo lập trình "Unicode"';

//Xử lý chuỗi

//1. Thêm ký tự escape vào phía trước các ký tự mong muốn
//addcslashes($str, $listChar)
$str = addcslashes($str, 'l"');

echo $str;

echo '<br/>';

$str = "Trung tâm đào \ tạo lập trình 'Unicode'";

//2. Thêm ký tự escape vào phía trước dấu ", ', \

$str = addslashes($str);

echo $str;

echo '<br/>';

$str = 'Trung tâm đào tạo lập trình "Unicode"';
$str = addslashes($str);
echo $str.'<br/>';

//3. Loại bỏ tất cả các ký tự escape có trong chuỗi

$str = stripslashes($str);
echo $str.'<br/>';

//4. Chuyển chuỗi thành mảng

$str = 'Trung tâm Unicode';

$arr = explode(' ', $str);

print_r($arr);

echo '<br/>';

//5. Chuyển mảng thành chuỗi
$str = implode(' - ', $arr);
echo $str;

echo '<br/>';

//6. Lấy độ dài của chuỗi
$str = ' Trung tâm đào tạo lập trình "Unicode" ';
$length = strlen($str);
echo 'Độ dài là: '.$length;
echo '<br/>';

//7. Lấy số chữ trong chuỗi
$str = 'Xin chào Unicode';
$wordCount = str_word_count($str, 0, 'àáãâạêéíîóõôúÀÁÃÂÇÊÉÍÎÓÕÔÚ');
echo 'Số chữ là: '.$wordCount;
echo '<br/>';

//8. Lặp chuỗi theo số lần xác định
$str = 'Unicode';
$str = str_repeat($str, 10);
echo $str;
echo '<br/>';

//9. Tìm kiếm và thay thế
//$str = 'Trung tâm đào tạo lập trình "Unicode"';
$str = 'C:\xampp\htdocs\hocphp';
//$str = str_replace('"Unicode"', '', $str);
$str = str_replace('\\', '/', $str);
echo $str;
echo '<br/>';

//10. Hàm mã hoá 1 chiều (32 ký tự)
$str = '123456';
$str = md5($str);
echo $str.'<br/>';

//11. Hàm mã hoá 1 chiều (40 ký tự)
$str = '123456';
$str = sha1($str);
echo $str.'<br/>';

//12. Chuyển chuỗi html thành dạng thực thể
$str = '<p>Đào tạo PHP</p>';
$str = htmlentities($str);
echo $str;

//13. Chuyển từ dạng thực thể sang chuỗi html
$str = html_entity_decode($str);
echo $str;

//14. Loại bỏ thẻ html
$str = '<p>Trung tâm đào tạo <a href="">lập trình <strong>Unicode</strong></a></p>';
$str = strip_tags($str, '<a><strong>');
echo $str;
echo '<br/>';

//15. Lấy chuỗi con từ chuỗi cha
$str = 'Trung tâm đào tạo Unicode';
$subStr = substr($str, -12);
echo $subStr;
echo '<br/>';

//16. Tách chuỗi từ ký tự cho trước cho đến hết chuỗi
$str = 'hoangan.web@gmail.com';
$subStr = strstr($str, '.');
echo $subStr;
echo '<br/>';

//17. Tìm chuỗi và trả về số thứ tự
$str = 'Trung tâm dao tao Unicode';
$postion = strpos($str, 'Unicode');
var_dump($postion);
echo '<br/>';

//18. Cắt bỏ và thay thế chuỗi
/*
 * Chèn
 * Đè
 * */
$str = 'Trung tâm dao tao Unicode';
$str = substr_replace($str, '@', 0, 2);
echo $str;
echo '<br/>';

//19. Chuyển các ký tự sang dạng viết thường
$str = 'Trung tâm đÀo tạo Unicode';
//$str = strtolower($str); //Không hỗ trợ tiếng việt có dấu
$str = mb_strtolower($str, 'UTF-8'); //Hỗ trợ tiếng việt có dấu
echo $str;
echo '<br/>';

//20. Chuyển các ký tự thành chữ hoa
$str = 'Trung tâm dao tao Unicode';
//$str = strtoupper($str);
$str = mb_strtoupper($str, 'UTF-8');
echo $str;
echo '<br/>';

//21. Chuyển chữ cái đầu tiên thành chữ hoa
$str = 'trung tam unicode';
$str = ucfirst($str);
echo $str;
echo '<br/>';

//22. Chuyển chữ cái đầu tiên thành chữ thường
$str = 'Trung tam unicode';
$str = lcfirst($str);
echo $str;
echo '<br/>';

//23. Chuyển ký tự đầu tiên thuộc chữ trong chuỗi
$str = 'trung tâm unicode';
$str = ucwords($str);
echo $str;
echo '<br/>';

//24. Xoá ký tự đầu cuối
$str = ' Trung tam Unicode ';

$str = trim($str, 'T');

var_dump($str);

echo '<br/>';

$url = 'https://unicode.vn/khoa-hoc/khoa-hoc-php/';
$url = trim($url, '/');
echo $url;
echo '<br/>';

//25. Xoá ký tự bên trái
$str = ' Trung tam Unicode ';
$str = ltrim($str);
var_dump($str);
echo '<br/>';

//26. Xoá ký tự bên phải
$str = ' Trung tam Unicode ';
$str = rtrim($str);
var_dump($str);
echo '<br/>';

//27. Tách chuỗi lớn thành từng chuỗi nhỏ
$str = '121212';
$str = chunk_split($str, 2, ':');
$str = rtrim($str, ':');
echo $str;
echo '<br/>';

//28. Chuyển ký tự xuống dòng (\n) thành thẻ <br/>
$str = 'Trung tam dao tao '."\n".' Unicode';
$str = nl2br($str);
echo $str;
echo '<br/>';

//29. Chuyển json thành mảng hoặc object
$strJson = '{"item1":"Value1", "item2":"Value2"}';
echo $strJson;
echo '<br/>';
$jsonArr = json_decode($strJson, true);
print_r($jsonArr);
echo '<br/>';

//30. Chuyển từ mảng, object thành json
$strJson = json_encode($jsonArr);
echo $strJson;