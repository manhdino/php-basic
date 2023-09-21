<?php
//1. Kiểu số nguyên (Int)
//Khai báo
$age=30;

//Ép kiểu
$age = (int)$age;

//Kiểm tra kiểu số nguyên
//$check = is_int($age);
$check = is_integer($age);

//2. Kiểu boolean (Logic)
$check = -1;
$check = (bool)$check;
//$checkBool = is_bool($check);
//var_dump($check);

//3. Kiểu số thực (float)
$fee = 10;
$fee = (float)$fee;
//var_dump($fee);
//echo '<br/>';
//var_dump(is_float($fee));

//4. Kiểu dữ liệu chuỗi (string)
$message = 10;
$message = (string)$message;
$checkString = is_string($message);
//var_dump($message);
//echo '<br/>';
//var_dump($checkString);

//5. Kiểu mảng (array)
$carArr = '';
$carArr = (array)$carArr;
$checkArr = is_array($carArr);
//var_dump($carArr);
//echo '<br/>';
//var_dump($checkArr);

//6. Kiểu rỗng (Null)
$total = NULL;
$total = (int)$total;
$checkNull = is_null($total);
//var_dump($total);
//echo '<br/>';
//var_dump($checkNull);

//7. Kiểu Resource
$curl = curl_init();
$checkType = get_resource_type($curl);
//var_dump($curl);
//echo '<br/>';
//var_dump($checkType);

//8. Kiểu đối tượng (Object)
$dataCustomer = [
    'Hoàng An'
];
$dataCustomer = (object)$dataCustomer; //Ép kiểu
$checkObject = is_object($dataCustomer);
//var_dump($dataCustomer);
//echo '<br/>';
//var_dump($checkObject);

$customerObject = new StdClass();
$customerObject->age = 30;
//var_dump($customerObject);

/*
 * Phân biệt empty và null
 *
 * */
$message1 = null; //Rỗng
$message2 = ''; //Trống
var_dump($message1);
echo '<br/>';
var_dump($message2);