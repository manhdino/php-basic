<?php

/*
Bài 01: Kiểm tra số điện thoại Việt Nam hợp lệ
  Bắt đầu bằng số 0 hoặc +84
  Có tổng 10 số (+84 quy ước là 1 số)
Bài 02: Kiểm tra 1 URL hợp lệ
  Cấu trúc URL: protocol + www + domain + port + path
  Trong đó: www và port là không bắt buộc
  Ví dụ: https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao

Bài 03: Kiểm tra 1 thẻ html hợp lệ
  1 thẻ html gọi là hợp lệ nếu tuân thủ cấu trúc sau:
 <tag attribute1="Value 1" attribute2="Value 2">Content</tag>
Hoặc
 <tag attribute1="Value 1" attribute2="Value 2" />

Bài 04: Kiểm tra trong 1 nội dung HTML có hình ảnh hợp lệ hay không?
   Hướng dẫn: Kiểm tra thẻ chèn hình ảnh hợp lệ
   <img attribute1="Value1" src="link" attribute2="Value2" attributen="Value n" />
Hoặc
   <img attribute1="Value1" src="link" attribute2="Value2" attributen="Value n" >/**
 */


//Bài 01:
$phone = '+84866020132'; //số điện thoại cần kiểm tra
/**
 * Giải thích: 
 * /: dấu phân cách
 * ^: so sánh đầu chuỗi nhưng nếu [^0-9]: không phải là số  thì ^ có nghĩa là NOT
 * $: so sánh cuối chuỗi, nếu ko có kí tự này thì nó sẽ chỉ lấy đến chuỗi thỏa mãn,
 * tức là nếu sdt bằng 08660201322222: thì vẫn thỏa mãn vì nó chỉ kiểm tra phần đầu của chuỗi và thấy thỏa mãn
 * là 0866020132 là ok, nhưng thực ra là lỗi
 * \d: số từ 0 --> 9, {9}: độ dài phải = 9
 */
$pattern = '/^(0|\+84)\d{9}$/';
$check = preg_match($pattern, $phone);

if ($check) {
  echo 'Số điện thoại hợp lệ';
} else {
  echo 'Số điện thoại không hợp lệ';
}

//Bài 02:
$url = 'https://www.unicode.vn:8080/khoa-hoc';

$pattern = '~^(http|https)://[a-z]+[a-z-_\.]*\.[a-z]{2,}(:\d+)?(/?|/[a-z-_0-9\./]*)$~';
/* https://online-unicode.dino.vn/khoa-hoc/lap-trinh-php-nang-cao.html
 * Giải thích:
   * ~: là dấu phân cách giống như / ở trên
   * ^(http|https): kiểm tra đầu chuỗi phải là http hoặc https
   * [a-z]+: kí tự từ a - z và phải cố độ dài ít nhất là 1 do(+: {1,})
   * [a-z]{2,}: đuôi .vn
   * (:\d+)?: port
 */
$check = preg_match($pattern, $url);

if ($check) {
  echo 'URL hợp lệ';
} else {
  echo 'URL không hợp lệ';
}

//Bài 03:
$subject = '<a href="https://unicode.vn" target="_blank">Unicode Academy</a>';

//$subject = '<input type="text" class="field-input"/>';

$pattern = '~^<[a-z]+(\s+[a-z-]+\s*=\s*"[^"]+")*(>.+</[a-z]+>|\s*/>)$~';
/**
 * (\s+[a-z-]+\s*=\s*"[^"]+")*
 *   + \s+: có ít nhất 1 khoảng trắng
 *   + * ngoài nghĩa là có thể trong 1 thẻ sẽ ko có thuộc tính nào cả 
 *   + [a-z-]+: tên thuộc tính phải có chữ cái ít nhất > 1
 *   + \s*: có thể có khoảng trắng hoặc không
 *   + [^"]+: lấy tất cả các kí tự trừ kí tự ": giá trị thuộc tính
 */
// (>.+</[a-z]+>|\s*/>)
/**
 * > đóng thẻ 
 * .+: . đại diện cho bất kì kí tự nào, thêm + nữa là phải > 1
 * </[a-z]+>: trường hợp này là đóng thẻ </a>
 */
// \s*/>: trường hợp này là thẻ ko có đóng vd thẻ img: <img />
$check = preg_match($pattern, $subject);

if ($check) {
  echo 'HTML hợp lệ';
} else {
  echo 'HTML không hợp lệ';
}


//Bài 04: 

$subject = '
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<p><img src="https://picsum.photos/450" alt="" /></p>
<h2>What is Lorem Ipsum?</h2>
<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
<h2>Where does it come from?</h2>
<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p><img src="https://picsum.photos/400" alt="" /></p>';

$pattern = '~<img(\s+[a-z]+\s*=\s*"[^"]*")*\s+src\s*=\s*"[^"]+"(\s+[a-z]+\s*=\s*"[^"]*")*\s*(/>|>)~';
/**
 * (\s+[a-z]+\s*=\s*"[^"]*")*: y hệt như trên
 * (\s+[a-z]+\s*=\s*"[^"]*")*: thuộc tính khác alt=""
 * 
 */
$check = preg_match($pattern, $subject);

if ($check) {
  echo 'Trong nội dung có ảnh';
} else {
  echo 'Trong nội dung không có ảnh';
}

/**
 * preg_match() khi có thêm 1 tham số thứ 3 là $matches thì nó sẽ là mảng
 * chứa các giá trị thỏa mãn $pattern 
 * preg_match(): trả về mảng chứ giá trị thỏa mãn đầu tiên
 * preg_match_all(): trả về mảng chứa tất cả giá trị thỏa mãn
 */
/*
 * Lấy số điện thoại trong 1 văn bản nội dung
 *
 * */

$subject = 'Lorem Ipsum is simply dummy text 0388875179 of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining 0123456789 essentially unchanged. 016495327 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

$pattern = '/0\d{9}/';
$check = preg_match($pattern, $subject, $matches);
$check_all = preg_match_all($pattern, $subject, $matches_all);
echo '<pre>';
print_r($matches);
echo '</pre>';
echo '<pre>';
print_r($matches_all);
echo '</pre>';
/**
 * Capturing Group:
 * trong biểu thức regex khi ta thêm () vào thì khi gọi hàm preg_match() thì nó sẽ trả về
 * 1 mảng gồm những biểu thức thỏa mãn pattern nhưng phải chứa trong dấu ()
 * VD: khi ta muốn lấy 1 link ảnh trong 1 thẻ <img> thì chỉ cần thêm () và biểu thức chứa giá trị link ảnh
 * thứ tự:
 *    + đầu tiên sẽ luôn là khớp cả chuỗi
 *    + giá trị thỏa mãn pattern trong ngoặc()đầu tiên
 *    + link ảnh trong ngoặc thứ 2 (giải thích vì sao lại $matches[2])
 */
$subject = '<img title="Ảnh" height="200" src="https://unicode.vn/images/anh.jpg" alt="" width=""/>';

$pattern = '<img(\s+[a-z-]+\s*=\s*"[^"]*")*\s+src="([^"]+)"(\s+[a-z-]+\s*=\s*"[^"]*")*\s*/*>';

$check = preg_match($pattern, $subject, $matches);

if (!empty($matches[2])) {
  echo 'Link ảnh: ' . $matches[2];
}

/**
 * Greedy:Greedy là tình trạng tham lam khi sử dụng dấu . để đại diện cho các ký tự
 * Để khắc phục tình trạng Greedy, chỉ cần thêm ký tự ? vào sau độ dài của dấu .
 */

$subject = '<img title="Ảnh" height="200" src="https://unicode.vn/images/anh.jpg" alt="" width="" style="width: 300px;"/>';

$pattern = '~<img.*src="(.+)".*/*>~';
/**
 * Theo pattern trên thì giá trị Capturing Group được là https://unicode.vn/images/anh.jpg" alt="" width="" style="width: 300px;
 * chứ ko phải link ảnh, do . nó đã bỏ qua kí tự " mà nó gặp đầu tiên(vị trí anh.jpg") mà nó THAM LAM lấy đến kí tự " 
 * ở vị trí cuối tức là vị trí 300px;" 
 * giải pháp là thêm dấu ? sau .+ --> sửa lại thành: src="(.+?)", thì khi nó gặp dấu " đầu tiên sẽ tự động ngắt luôn
 * lưu ý nếu ? mà để sau +, tức là +? thì nó sẽ là ngắt, chứ ko phải là {0,1}
 * sử dụng khi ta ko thể biết trước được kí tự mà chúng ta cần lấy có những kí tự đặc biệt nào, khi đó ta sẽ sử dụng
 * . để đại diện cho tất cả kí tự 
 */
$check = preg_match($pattern, $subject, $matches);

echo '<pre>';
print_r($matches[1]);
echo '</pre>';

/**
 * None Capturing Group
 * None Capturing Group ngược lại với Capturing Group, có nghĩa sẽ không cắt nội dung trong cặp ngoặc đơn vào tham biến $matches
 * $pattern = '/(?:pattern_string)/';
 */

$subject = '<img title="Ảnh" height="200" src="https://unicode.vn/images/anh.jpg" alt="" width=""/>';

$pattern = '<img(?:\s+[a-z-]+\s*=\s*"[^"]*")*\ssrc="([^"]+)"(?:\s+[a-z-]+\s*=\s*"[^"]*")*\s*/*>';

$check = preg_match($pattern, $subject, $matches);

echo '<pre>';
print_r($matches[1]);
echo '</pre>';
/*
Thay thế trong Regular Expression
 Thay thế trong Regex có nghĩa là kỹ thuật thay thế biểu thức Regex thành chuỗi (Có thể có đối sánh chuỗi hoặc không)
Để thay thế chuỗi trong Regex, chúng ta cần sử dụng hàm preg_replace()
Cú pháp:

$result = preg_replace($pattern, $replace, $subject);
Trong đó:

$pattern: Biểu thức Regex cần tìm kiếm để thay thế
$replace: Chuỗi cần thay thế
$subject: Chuỗi cần tìm kiếm
Lưu ý:

Hàm này sẽ trả về chuỗi sau khi đã thay thế
Hàm này chỉ thay thế tất cả kết quả tìm được. Nếu muốn giới hạn tham số lượng vào tham số thứ 4
*/

$subject = 'https://unicode.vn/khoa-hoc/page/12';

$pattern = '~\d+$~';

$result = preg_replace($pattern, 'trang', $subject,1);

echo $result;

/*
Đối sánh chuỗi trong Regular Expression

Đối sánh chuỗi là kỹ thuật được áp dụng trong việc thay thế và có sử dụng Capturing Group
Đối sánh chuỗi sẽ giữ nguyên giá trị của biểu thức tìm được sang chuỗi cần thay thế (Tham số $replace)
Để áp dụng đối sánh chuỗi, chúng ta cần sử dụng các ký hiệu: $1, $2, $3 tương ứng với các Capturing Group bên $pattern
Ví dụ:

$content = preg_replace('/(0\d{9})/', '<a href="tel:$1">$1</a>', $content);
Qua ví dụ này ta thấy toàn bộ nội dung của $pattern sẽ được đối sánh qua tham số $replace để thêm thẻ HTML <a>

*/

$content = 'Lorem Ipsum is simply dummy 0388875179 text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled contact@unicode.vn it to make a type specimen book. 0388875179 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset hoangan.web@gmail.com sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 0123456789';

$pattern = '~(0\d{9})~';

$replace = '<a href="tel:$1">$1</a>';
/**
 * Giải thích: Nếu ta muốn thay sđt bằng link sđt(tức chèn thẻ a vào) nhưng vấn đề là làm sao để lấy ra được số điện thoại
 *   mà $pattern chỉ có thể tìm ra sđt phù hợp thôi nên ta thêm Capturing Group vào để lấy ra giá trị 
 *   rồi truyền giá trị đó vào thẻ a là OK
 *   giá trị đó là $1, $2, $3, $4, $5, $6... đó chính là vị trí () tính từ trái trang phải trong $pattern
 *  Ban đầu pattern sẽ tìm sđt phù hợp và thay bằng $replace
 *  
 */
$content = preg_replace($pattern, $replace, $content);
echo $content;

/*
// Look Around trong Regular Expression

// Look Around là nhóm kỹ thuật xử lý Regex nâng cao và rất hữu ích khi xử lý chuỗi phức tạp

// Look around là nhóm không chiếm giữ (non capturing group) dùng để so khớp dựa vào những gì nó tìm thấy trước (look ahead) và sau (look behind) một mẫu

// Look Around bao gồm:

// Positive lookahead: Cú pháp (?=ABC)
// Negative lookahead: Cú pháp (?!ABC)
// Positive lookbehind: Cú pháp (?<=ABC)
// Negative lookbehind: Cú pháp (?<!ABC)
$content = 'unicode academy academy unicode';
Tình huống 1: Lấy chữ ac mà có chữ academy đứng sau nó
$content = 'unicode ac academy unicode
$pattern = '/ac(?=\sacademy)/';

Tình huống 2: Lấy chữ academy mà không có chữ academy đứng phía sau nó
$content = 'unicode academy academy unicode';
$pattern = '/academy(?!\sacademy)/;

Tình huồng 3: Lấy chữ academy mà có chữ unicode đứng phía trước nó
$content = 'unicode academy academy unicode';
$pattern = '/(?<=unicode\s)academy/';

Tình huống 5: Lấy chữ academy mà không có chữ unicode đứng phía trước nó

Pattern viết như sau:

$pattern = '/(?<!unicode\s)academy/';

*/

$pattern = '~^(?=.*[A-Z].*[A-Z])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z])(?=.*[!@#\$%\^\*\(\)-\+]).{8,}$~';

$password = 'AnAB@123';

$checkPassword = preg_match($pattern, $password);

if ($checkPassword){
    echo 'Mật khẩu mạnh';
}else{
    echo 'Mật khẩu yếu';
}