<?php
/*
 * Bài 04: Tìm giá trị lớn nhất, nhỏ nhất của mảng 1 chiều
 * Tên kỹ thuật: Kỹ thuật đặt lính canh
 *
 * */
$demoArr = [
    'learn' => 1,
    'name' => 5,
    'age' => 9,
    'location' => 20,
    'address' => 4
];

echo '<pre>';
print_r($demoArr);
echo '</pre>';

if (!empty($demoArr)){

    $firstElement = [];
    //Tìm phần tử đầu tiên của mảng
    foreach ($demoArr as $key=>$item){
        $firstElement = ['key'=>$key, 'value'=>$item];
        break;
    }

    $max = [
        'key' => $firstElement['key'],
        'value' => $firstElement['value']
    ]; //Giả định giá trị lớn nhất là phần tử đầu tiên

    $min = [
        'key' => $firstElement['key'],
        'value' => $firstElement['value']
    ]; //Giả định giá trị nhỏ nhất là phần tử đầu tiền


    foreach ($demoArr as $key => $item){
        if ($max['value']<=$item){
            $max['value'] = $item;
            $max['key'] = $key;
        }

        if ($min['value']>=$item){
            $min['value'] = $item;
            $min['key'] = $key;
        }
    }

    echo 'Giá trị lớn nhất là: '.$max['value'].' - Chỉ số là: '.$max['key'].'<br/>';
    echo 'Giá trị nhỏ nhất là: '.$min['value'].' - Chỉ số là: '.$min['key'].'<br/>';
}

