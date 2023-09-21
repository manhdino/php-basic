<?php
$customerArr1 = [
   'key1' => 'Item 1',
   'key2' => 'Item 2'
];

$customerArr2 = [
    'key2' => 'Item 2'
];

$arrayIntersect = array_intersect_assoc($customerArr1, $customerArr2);

echo '<pre>';
print_r($arrayIntersect);
echo '</pre>';