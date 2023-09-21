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

$firstElement = [];
foreach ($demoArr as $key => $value) {
    $firstElement = ['key' => $key, 'value' => $value];
    break;
}

$minElement = [
    'key' => $firstElement['key'],
    'value' => $firstElement['value'],
];

$maxElement = [
    'key' => $firstElement['key'],
    'value' => $firstElement['value'],
];

foreach ($demoArr as $key => $value) :
    if ($demoArr[$key] > $maxElement['value']) :
        $maxElement['key'] = $key;
        $maxElement['value'] = $value;
    elseif ($minElement['value'] > $value) :
        $minElement['key'] = $key;
        $minElement['value'] = $value;
    endif;
endforeach;
echo 'Max value is: ' . $maxElement['value'] . ' with key : ' . $maxElement['key'] . '<br/>';
echo 'Max value is: ' . $minElement['value'] . ' with key : ' . $minElement['key'] . '<br/>';
