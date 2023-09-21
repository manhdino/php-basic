<?php
/*
 * - Vấn đề khi duyệt (đọc) mảng
 * - Mảng đa chiều
 * - Duyệt (đọc) mảng đa chiều
 * */

//$customerArr = 'Unicode';
/*
 * Trước khi duyệt mảng:
 * 1. - Kiểm tra biến tồn tại
 * 2. - Kiểm tra biến là mảng (is_array())
 * 3. - Kiểm tra mảng có phần tử
 * => 1 và 3 dùng hàm empty()
 * */
if (!empty($customerArr) && is_array($customerArr)){
    foreach ($customerArr as $key=>$value){
        echo $value.'<br/>';
    }
}

$customerArr = [
    'Hoàng An',
    'Anh Tuấn',
    'Văn Mai',
    false
];

for ($i = 0; $i<count($customerArr); $i++){
    if (isset($customerArr[$i])){
        var_dump($customerArr[$i]);
    }
}