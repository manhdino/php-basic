<?php
/*
 * Kiểu dữ liệu đơn: String, Boolean, Null, Number
 
 * */

$carArr = [
    'Vinfast',
    'Honda',
    'Kia',
    'Toyota',
    null,
    30
]; //Khai báo mảng
//echo '<pre>';
//print_r($carArr);
//echo '</pre>';

$customerArr = [
    'Unicode',
    'name' => 'Hoàng An',
    10 => 'PHP',
    'postion' => 'Techincal',
    'age' => 30,
    'HTML - CSS'
];

//echo '<pre>';
//print_r($customerArr);
//echo '</pre>';

//Thêm phần tử vào mảng
/*
 * Cách 1: Thêm khi khai báo
 * $customerArr = ['Item 1', 'Item 2', 'Item 3'];
 *
 * Cách 2: Thêm sau khi khai báo,thêm ko có key thì sẽ tự thêm
 * chỉ số index phù hợp
 * 
 * Thêm phần từ có key: $ten_bien[key] = value;
   Thêm phần từ không key: $ten_bien[] = value;
   Dùng thông qua hàm array_push: array_push($ten_bien,
value1, value2);
 * Đọc mảng:
 * Dùng vòng lặp for
   Dùng vòng lặp foreach
   Đọc trực tiếp từ key: $ten_bien[key]
 * Sửa - xóa phần tử trong mảng:
   Sửa phần tử mảng: $ten_bien[$key] = value;
   Xoá phần tử mảng: unset($ten_bien[$key]);
 * */


$customerArr = []; //Khai báo rỗng

//Thêm phần tử
$customerArr['company'] = 'Unicode';
$customerArr['language'] = 'PHP';
$customerArr[] = 'HTML - CSS';
$customerArr['name'] = 'Hoang An';
$customerArr[] = 'Trung tâm Unicode';

//Sửa giá trị phần tử mảng
//$customerArr[] = 'Trung tâm Unicode';
//$customerArr['age'] = 30;
//$customerArr[11] = 'Javascript';

//Xoá phần tử của mảng
//unset($customerArr[0]);

//Đọc mảng
echo '<pre>';
print_r($customerArr);
echo '</pre>';

//1. Đọc mảng tuần tự (Index tăng dần đều từ 0)
for ($index = 0; $index<count($customerArr); $index++){
    echo $customerArr[$index].'<br/>';
}

//2. Đọc mảng bất kỳ
foreach ($customerArr as $item){
    echo $item.'<br/>';
}

foreach ($customerArr as $key=>$item){
    echo $key.' = '.$item.'<br/>';
}

echo 'Tên công ty: '.$customerArr['company'];

if(true):
  foreach ($customerArr as $key=>$item):
  endforeach;
else:
endif;