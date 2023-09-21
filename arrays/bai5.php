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

if(!empty($customerArr)):
   $minAgeCustom = $customerArr[0];
   $maxAgeCustom = $customerArr[0];
   /* C1:
   foreach($customerArr as $key => $value):
       if($customerArr[$key]['age'] > $maxAgeCustom['age']):
        $maxAgeCustom['age'] = $customerArr[$key]['age'];
        $maxAgeCustom['name'] = $customerArr[$key]['name'];
       endif;
       if($customerArr[$key]['age'] < $minAgeCustom['age']):
        $minAgeCustom['age'] = $customerArr[$key]['age'];
        $minAgeCustom['name'] = $customerArr[$key]['name'];
       endif;
   endforeach;
   */
    //C2:
   foreach($customerArr as $item){
    if($maxAgeCustom['age'] < $item['age']){
           $maxAgeCustom = $item;
    }
    if($minAgeCustom['age'] > $item['age']){
          $minAgeCustom = $item;
    }
   }
endif;

echo '<pre>';
print_r($minAgeCustom);
echo '</pre>';
echo '<pre>';
print_r($maxAgeCustom);
echo '</pre>';
?>