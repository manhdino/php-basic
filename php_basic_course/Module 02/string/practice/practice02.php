<?php
/*
 * Bài 5: Nhập vào tên 1 người, viết chương trình in ra:
- Họ và tên lót
- Tên
 *
 * */

//Input
$fullName = 'Nguyễn Văn Thành Trung';

//Handle
$positionSpaceLast = mb_strripos($fullName, ' ', null, 'UTF-8');
$leftLength = mb_strlen($fullName, 'UTF-8') - ($positionSpaceLast+1);
$firstName = mb_substr($fullName, $positionSpaceLast+1, $leftLength, 'UTF-8');

$lastName = mb_substr($fullName, 0, $positionSpaceLast, 'UTF-8');

//Output
echo 'FirstName: '.$firstName.'<br/>';
echo 'LastName: '.$lastName.'<br/>';

/*
 * Bài 6: Viết chương trình in ra 50 chữ đầu tiên trong 1 chuỗi
 * */

//Input
$content = 'Báo China Daily dẫn lời ông Zeng Yixin, Phó Chủ tịch Ủy ban Y tế Quốc gia Trung Quốc, hôm nay 7/6 cho biết, nước này đã cung cấp hơn 350 triệu liều vắc xin cho các nước trên thế giới và sẽ tiếp tục đẩy mạnh sản xuất trong nước để tăng nguồn cung vắc xin cho nước ngoài.';
$content.='Trung Quốc đã phê duyệt sử dụng 4 loại vắc xin nội địa để sử dụng cho chương trình tiêm chủng trong nước. Tính đến ngày 5/6, Trung Quốc đã tiêm khoảng 763 triệu liều vắc xin cho người dân trong nước và cung cấp hơn 350 triệu liều cho các nước.';

$limitWord = 21;

//Handle
$contentLength = mb_strlen($content, 'UTF-8');
$description = null;
$count = 0;
for ($i = 0; $i<$contentLength; $i++){
    $description.=mb_substr($content, $i, 1, 'UTF-8');
    if (mb_substr($content, $i, 1, 'UTF-8')==' '){
        $count++;
        if ($count>=$limitWord){
            break;
        }
    }
}

//Output
echo $description;
echo '<br/>';

/*
 * Bài 7: Viết chương trình kiểm tra độ mạnh của mật khẩu

- Có độ dài tối thiểu là 6
- Chứa ít nhất 1 chữ số (1234567890)
- Chứa ít nhất kí tự chữ cái in thường (abc...z)
- Chứa ít nhất 1 kí tự chữ cái in hoa (ABC...Z)
- Chứa ít nhất 1 kí tự đặc biệt: !@#$%^&*()-+
 *
 * */

$password = 'H123456';

$number = '1234567890';
$symbol = '!@#$%^&*()-+';

$checkLength = false;
$checkNumber = false;
$checkLower = false;
$checkUpper = false;
$checkSymbol = false;

if (mb_strlen($password, 'UTF-8')>=6){
    $checkLength = true;
}

for ($i = 0; $i<mb_strlen($password, 'UTF-8'); $i++){
    $char = mb_substr($password, $i, 1, 'UTF-8');

    if (mb_strpos($number, $char, null, 'UTF-8')!=false){
        $checkNumber = true;
    }

    if ($char>='a' && $char<='z'){
        $checkLower = true;
    }

    if ($char>='A' && $char<='Z'){
        $checkUpper = true;
    }

    if (mb_strpos($symbol, $char, null, 'UTF-8')!=false){
        $checkSymbol = true;
    }
}

if ($checkLength && $checkNumber && $checkLower && $checkSymbol){
    echo 'Mật khẩu mạnh';
}else{
    echo 'Mật khẩu yếu';
}