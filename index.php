<?php /* Tổng hợp lý thuyết PHP:

1.die và exit: tất cả những dòng code bên dưới die or exit đều 
sẽ không được chạy.Có thể truyền thông báo vào die or exit
dùng để debug khi gặp lỗi

2.Include - INclude Once - Require - Require Once
+ Dùng để input các file PHP khác vào file PHP đang chạy
+ path: 
+ file php đang chạy sẽ được lưu vào trong biến __FILE__
+ vị trí folder(chứa file đang chạy) nằm trong Server Xampp lưu trong biến __DIR__
+ url: 
+ khi nhìn vào url: https://baomoi.com/tin-moi.epi ta không thể biết được
file đang chạy là file gì ở trên Server và đường dẫn đến file đó
là gì
VD: https://baomoi.com/tin-moi.epi
+ Giao thức https:
+ Hostname(domain): baomoi.com
+ Path: còn lại phía sau của url(nhưng là Path ảo) do Rewrite URL
+ Cú pháp chung:
include 'path_to_file.php';
include ('path_to_file.php);
+ Phân biệt:
+ include: import file khác, nếu import lỗi, các câu lệnh bên dưới vẫn chạy
+ include_once: giống như include nhưng chỉ import 1 lần(dùng khi khai báo 
include_once cùng 1 file nhiều lần thì nó sẽ chỉ import 1 lần duy nhất)
+ require: nếu import lỗi câu lệnh bên dưới sẽ dừng
+ require_once: giống như require nhưng chỉ import 1 lần
+ Đường dẫn tuyệt đối: đi từ ổ đĩa 
+ Đường dẫn tương đối: đi từ project

3.Cú pháp thay thế if-else,foreach,for,while
4.Xử lý chuỗi:
+ Chuỗi là danh sách các kí tự nằm trong dấu nháy đơn hoặc nháy kép
+ 
*/


?>

<?php /* Example:
1.echo 'die and exit';
die('done');
exit;
echo 'after die and exit';

2.path: VD code trong thư mục imports
$path_file = __FILE__;
echo $path_file.'<br/>';
$path_dir = __DIR__;
echo $path_dir;

3.Cú pháp thay thế
if-else
<?php
$number = 10;
if ($number == 10) :
?>
  <h3>Title 1</h3>
  <h4>Title 1</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam numquam incidunt alias optio omnis unde dolore sed
    dicta, veritatis ullam ex, nam asperiores consequuntur distinctio a impedit inventore maxime nihil?</p>
<?php
else :
?>
  <p>Không hợp lệ</p>
<?php
endif;
?>

for
<?php
for($i = 0; $i < 10;$i++):
  echo $i.' ';
endfor;
echo '<br/>';
?>

while
<?php
$i = 1;
while($i < 10):
  echo $i.' ';
  $i++;
endwhile; 
echo '<br/>';
?>

foreach(array)
<?php
$dataArr = ['1','2','3','4','5','6','7','8','9'];
foreach($dataArr as $item):
  echo $item.' ';
endforeach;
?>
*/
?>

