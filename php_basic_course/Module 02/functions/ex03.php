<?php
/*
 * - Hàm không giới hạn tham số
 * - Giải thuật đệ quy
 * + Hiển thị các bài toán kiểu đa cấp: Chuyên mục, menu
 * + Phân cấp url, breadcrumbs,....
 * */

function getMessage($str, ...$params){
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
