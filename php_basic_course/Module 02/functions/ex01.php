<?php
/*
 * Cú pháp định nghĩa hàm
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
 * */


require_once 'functions.php'; //Import file functions.php
require_once 'imports.php'; //Import file imports.php

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