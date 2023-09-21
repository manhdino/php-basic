<?php
/*
 * 3. Kiểm tra một số có phải là số nguyên tố hay không và hiển thị kết quả
 *
 * Input: Số nguyên N
 * Output: Thông báo số N có phải số nguyên tố hay không?
 *
 * Số nguyên tố:
 * - Lớn hơn 1
 * - Chỉ chia hết cho 1 và chính nó
 *
 * Giải thuật:
 * - Kiểm tra số N xem có lớn hơn 1 hay không
 * - Nếu số N lớn hơn 1:
 * + Dùng vòng lặp chạy từ 2 đến N-1
 * + Kiểm tra trong phạm vi từ 2 đến N-1 có chia hết cho số nào không?
 * + Nêu có chia hết => Kết luận không phải số nguyên tố
 * + Nếu không chia hết => Kết luận là số nguyên tố
 * - Nếu số N nhỏ hơn hoặc bằng 1 => Thông báo không phải số nguyên tố
 * */

$n = 1; //Số cần kiểm tra

if ($n>1){
    $check = true; //Gắn cờ kiểm tra số nguyên tố (Giả định n là số nguyên tố)
    for ($index = 2; $index<$n; $index++){
        if ($n % $index == 0){
            $check = false;
            break; //Thoát khỏi vòng lặp
        }
    }

    if ($check){ //if ($check==true)
        echo $n.' là số nguyên tố';
    }else{
        echo $n.' không phải là số nguyên tố';
    }

}else{
    echo $n.' không phải là số nguyên tố <br/>';
}

/*4. In bảng cửu chương*/

?>
<table border="1" width="100%">
        <?php
        for ($i = 1; $i<=10; $i++){
            if ($i==1 || $i==6){
                echo '<tr>';
            }
            echo '<td>';
            for ($j = 1; $j<=10; $j++){
                echo $i.' x '.$j.' = '.$i*$j.' <br>';
            }
            echo '</td>';

            if ($i==5 || $i==10){
                echo '</tr>';
            }
        }
        ?>

</table>
