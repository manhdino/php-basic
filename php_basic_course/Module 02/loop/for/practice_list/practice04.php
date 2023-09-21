<?php
/*6. Vẽ tam giác sao với N dòng*/
/*
 * Input: Số dòng N
 * Output: Tam giác vuông với N dòng
 * */

echo 'Bài 6 <br/>';
$n = 5;
for ($row = 1; $row<=$n; $row++){
    for ($col = 1; $col<=$row; $col++){
        if ($col<$row){
            echo '* ';
        }else{
            echo '*';
        }
    }
    echo '<br/>';
}

/*
 * 7. Vẽ tam giác sao đối xứng với N x 2 dòng
 *
 * */

echo 'Bài 7 <br/>';

$n = 5;

for ($row = 1; $row<=$n; $row++){
    for ($col = 1; $col<=$row; $col++){
        if ($col<$row){
            echo '* ';
        }else{
            echo '*';
        }
    }
    echo '<br/>';
}

for ($row = $n; $row>=1; $row--){
    for ($col = 1; $col<=$row; $col++){
        if ($col<$row){
            echo '* ';
        }else{
            echo '*';
        }
    }
    echo '<br/>';
}

/*
 * 8. Vẽ tam giác số tăng dần với N dòng
 *
 * */
$n = 5;
$count = 0;
for ($row = 1; $row<=$n; $row++){
    for ($col = 1; $col<=$row; $col++){
        $count++;
        if ($col<$row){
            echo $count.' ';
        }else{
            echo $count;
        }

    }
    echo '<br/>';
}