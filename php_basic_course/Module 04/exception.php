<?php
/*
 * Xử lý ngoại lệ là quá trình xử lý các lỗi giúp chương trình vẫn hoạt động bình thường
 * Cú pháp:
 * try{
 *
 * }catch()
 * */

echo 'Học lập trình PHP <br/>';
$age = 30;
try{
    //Tất cả code thực thi sẽ viết ở đây
    //unicode();
    if ($age<35){
        throw new Exception('Tuổi phải lớn hơn 35');
    }
}catch (Error $exception){
    echo $exception->getMessage().'<br/>';
    echo 'File: '.$exception->getFile().' - Line: '.$exception->getLine();
    echo '<br/>';
}
catch (Exception $exception){
    echo $exception->getMessage().'<br/>';
    echo 'File: '.$exception->getFile().' - Line: '.$exception->getLine();
    echo '<br/>';
}

echo 'Chương trình vẫn chạy';