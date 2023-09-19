<?php
/*
1.Cú pháp định nghĩa hàm
 *
 * function ten_ham(danh_sach_tham_so){
 *   //Nội dung hàm
 * }
 * - ten_ham: Do chúng ta tự đặt (Động từ)
 * + do
 * + make
 * + create
 * + build
 * - danh_sach_tham_so: Danh sách các biến cách nhau bởi dấu phẩy (,)
 * - Bên trong cặp ngoặc {} là nội dung hàm
 *
 * Cú pháp gọi hàm
 * ten_ham(danh_sach_tham_tri)
 * 
 * /*
 * - Hàm return, hàm không return
 * - Biến cục bộ, biến toàn cục, biến tĩnh
 * - Tham biến, tham trị, tham số, tham chiếu
 * 

2.
  2.1.Hàm return và hàm không return
- Hàm không có từ khoá return => Hàm không return
- Hàm có từ khoá return khi kết thúc hàm => Hàm return (Hàm có giá trị trả về)
Nếu từ khoá return được gọi ra => Các câu lệnh phía dưới không chạy

  2.2. Biến cục bộ, biến toàn cục

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
 * 
 *

 3.
 * - Hàm không giới hạn tham số
 * - Giải thuật đệ quy
 * + Hiển thị các bài toán kiểu đa cấp: Chuyên mục, menu
 * + Phân cấp url, breadcrumbs,....
 
 
 4.Hàm isset()
 * - Kiểm tra biến có tồn tại hay không
 * - Không kiểm tra về dữ liệu của biến
 * - Không kiểm tra được trường hợp null
 
 5.Hàm empty()
 * - Chỉ trả về kiểu dữ liệu boolean
 * - Trả về true nếu:
 * + không tồn tại => !isset($variable)
 * Hoặc
 * + Rỗng, =0, '0', trống, null, array rỗng, object rỗng, false
 *
 * Ứng dụng: Kiểm tra biến tồn tại và có dữ liệu
 * 
 * */
 
 

 
require_once './functions.php'; //Import file functions.php
require_once './imports.php'; //Import file imports.php

//1.

//Gọi hàm
if (function_exists('makeTotal')){
    makeTotal(5, 10);
}

echo '<br/>';

$numbera = 10;
$numberb = 20;

if (function_exists('makeTotal')){
    makeTotal($numbera, $numberb);
}

echo '<br/>';


//Gọi hàm getMessage()
if (function_exists('getMessage')){
    getMessage();
}
echo '<br/>';
//Gọi hàm getNumber()
if (function_exists('getNumber')){
    getNumber(12, 'Kết quả');
}
echo '<br/>';
//Gọi hàm buildMenu()
if (function_exists('buildMenu')){
    buildMenu(true, 'Đây là menu');
}


//2.
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

//Tham chiếu với biến
$a = 1;
$b = &$a;
$b = 10;
echo $a;//10
echo $b;//10

//Tham chiếu với hàm
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

?>
<?php

 //3.
 function getMessage3($str, ...$params){
    //    $params = func_get_args();
    //    print_r($params);
        //echo 'str = '.$str;
        $num = func_num_args();
        echo $num;
    }
    
    //getMessage('Unicode', 1, 2, 3);
    
    /*
     * Hiển thị dãy số fibonacci
     * - Tính số fibonacci thứ n
     * - Hiển thị n+1 số đầu tiên
     * */
    
    function fibonacci($n){
        if ($n==0 || $n==1){
            return $n;
        }
    
        return fibonacci($n-1)+fibonacci($n-2);
    }
    
    $n = 20; //Hiển thị 11 số fibo đầu tiên
    
    for ($i = 0; $i<=$n; $i++){
        echo fibonacci($i).' ';
    }
    
//4.
$number = 'Unicode';

if (isset($number) && $number){
    var_dump($number);
}


//5.
echo '<br/>';
$str = 0;
//Kiểm tra biến $str tồn tại và có dữ liệu
if (!empty($str)){
    echo $str;
}else{
    echo 'Không hợp lệ';
}

$x;
if (empty($x)) {
  echo "Biến x rỗng";
} else {
  echo "Biến x không rỗng";
}
?>