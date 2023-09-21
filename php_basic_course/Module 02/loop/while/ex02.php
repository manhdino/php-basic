<?php
$i = 11;
do{
    echo $i.'<br/>';
    $i++;
}while ($i<=10);

/*
/*
 * Tính tổng S = 1/2 + 1/4 + 1/6+...+1/n
 * Điều kiện: 1/n < 0.0001
 *
 *
 * */
$total = 0;
$i = 2;
do{
    $total+=1/$i;
    $i+=2;
}while (1/$i>=0.0001);
echo 'Tổng = '.$total.'<br/>';