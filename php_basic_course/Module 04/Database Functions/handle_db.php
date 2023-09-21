<?php
require_once 'connect.php';
require_once 'functions.php';

$dataInsert = [
    'email' => 'unicode.vn@gmail.com',
    'fullname' => 'Hoàng An',
    'createAt' => date('Y-m-d H:i:s'),
    'updateAt' => date('Y-m-d H:i:s')
];

//$checkInsert = insert('users', $dataInsert);

//$dataUpdate = [
//    'email' => 'hoangan.web@gmail.com',
//    'fullname' => 'Hoàng An',
//    'updateAt' => date('Y-m-d H:i:s')
//];
//
//$conditon = 'id=15';

//$checkUpdate = update('users', $dataUpdate, $conditon);
//var_dump($checkUpdate);
//$delete = delete('users', $conditon);
//var_dump($delete);

$data = first('users', 'email, fullname', 'id=25');
echo '<pre>';
print_r($data);
echo '</pre>';