<?php
/* Thứ tự import
 - header.php
 - content.php
 - footer.phps
*/

$path_dir = __DIR__.'/includes';//Đường dẫn tuyệt đối
$path_dir_2 = 'includes';//Đường dẫn tương đối
echo $path_dir;
echo $path_dir_2;
include($path_dir.'/header.php');
echo 'include file.php <br/>';//câu lệnh này vẫn chạy mặc dù include sai tên file .php
include_once($path_dir_2.'/header.php');
require($path_dir.'/content.php');
require_once($path_dir.'/footer.php');


?>

