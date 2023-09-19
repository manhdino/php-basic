<?php
//Định nghĩa hàm

if (!function_exists('makeTotal')){
    function makeTotal($a, $b){
        $total = $a+$b;
        echo 'Total '.$a.'+'.$b.' = '.$total;
    }
}

if (!function_exists('getMessage')){
    function getMessage(){
        echo 'Đây là thông báo';
        echo '<br/>';
        buildMenu(false, 'Unicode Menu');
        echo '<br/>';
        setMessage();
        echo '<br/>';
    }
}

if (!function_exists('getNumber')){
    function getNumber($number, $text=null){
        if ($text!=null){
            echo $text.':'.$number;
        }else{
            echo $number;
        }
    }
}

if (!function_exists('buildMenu')){
    function buildMenu($sub=false, $data){
        if ($sub){
            echo $data.' có menu con';
        }else{
            echo $data.' không có menu con';
        }
    }
}