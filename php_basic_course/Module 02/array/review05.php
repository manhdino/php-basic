<?php
/*
 * Bài 05: Tìm thông tin khách hàng có tuổi nhỏ nhất (Mảng đa chiều)
 *
 * */

$customerArr = [
    [
        'name' => 'Hoàng An',
        'age' => 30
    ],

    [
        'name' => 'Anh Tuấn',
        'age' => 25
    ],

    [
        'name' => 'Văn Toàn',
        'age' => 35
    ],

    [
        'name' => 'Anh Vũ',
        'age' => 26
    ]
];

echo '<pre>';
print_r($customerArr);
echo '</pre>';

if (!empty($customerArr)){
    $minCustomerAge = $customerArr[0]; //giả định khách hàng đầu tiên có tuổi nhỏ nhất

    $maxCustomerAge = $customerArr[0];

    foreach ($customerArr as $item){
        if ($minCustomerAge['age']>=$item['age']){
            $minCustomerAge = $item;
        }

        if ($maxCustomerAge['age']<=$item['age']){
            $maxCustomerAge = $item;
        }
    }

    echo '<pre>';
    print_r($minCustomerAge);
    echo '</pre>';

    echo '<pre>';
    print_r($maxCustomerAge);
    echo '</pre>';
}