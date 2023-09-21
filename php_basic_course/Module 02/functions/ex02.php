<?php
/*
 * - Hàm return, hàm không return
 * - Biến cục bộ, biến toàn cục, biến tĩnh
 * - Tham biến, tham trị, tham số, tham chiếu
 * */

//1.Hàm return và hàm không return
//- Hàm không có từ khoá return => Hàm không return
//- Hàm có từ khoá return khi kết thúc hàm => Hàm return (Hàm có giá trị trả về)
//Nếu từ khoá return được gọi ra => Các câu lệnh phía dưới không chạy

//2. Biến cục bộ, biến toàn cục
/*
 * - Biến cục bộ là biến được sử dụng trong phạm vi hàm
 * - Biến cục bộ không được sử dụng bên ngoài hàm hoặc trong hàm khác
 *
 * - Biến toàn cục là biến được sử dụng bất kỳ đâu
 * - Biến toàn cục được khai báo ở ngoài hàm
 * - Muốn sử dụng biến toàn cục bên trong hàm => Phải khai báo bằng từ khoá global
 * - Biến tĩnh: Không thay đổi giá trị khi gọi hàm
 *
 * - Tham biến: Làm thay đổi giá trị truyền vào
 * - Tham trị: Không làm thay đổi giá trị truyền vào
 * - Tham số: Được sử dụng khi định nghĩa hàm
 * - Tham chiếu: $b được khai báo tham chiếu đến $a => $b thay đổi => $a thay đổi theo
 * */

$data = 1;
$msg = 1;

function makeTotal($a, $b){
    global $data;
    echo $data;
    $total = $a + $b;
    //echo $total;
    return $total;
}

function getMessage($msg=null){

    if ($msg==null){
        return;
    }

    return $msg;
}

function setMsg($data){
    global $msg;
    $msg = $data;
}

function handleCount(){
    static $number = 0;
    $number++; //=1
    return $number;
}

function setMessage(&$msg){
    $msg.='1';
    return $msg;
}

function &hello(){
    static $hello='Unicode';
    return $hello;
}

$h = hello();
$h = 'Học PHP';
echo $h.'<br/>';
echo hello();

/*
 * hello() => Chứa 1 object
 * $object = &hello();
 * $object->method()
 * */