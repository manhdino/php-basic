<?php
/*
 * Bài 06: Tìm kiếm 1 giá trị bất kỳ trong mảng
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
    ],

    [
        'name' => 'Nguyễn Anh',
        'age' => 26
    ]
];

$keyword = 'anh'; //Từ khoá cần tìm kiếm
$result = []; //Giả định kết quả
if (!empty($customerArr)){
    foreach ($customerArr as $item){
        //So sánh tương đối
        $customerName = $item['name'];
        $customerName = mb_strtolower($customerName, 'UTF-8');
        $checkSearch = mb_strpos($customerName, $keyword, 0, 'UTF-8');
        if ($checkSearch!==false){
            $result[] = $item;
        }
    }
}

echo '<pre>';
print_r($result);
echo '</pre>';