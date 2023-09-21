<?php
/*
 * 5. Vẽ bàn cờ vua
 * */
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <?php
    $alphaLoop = null;
    for ($row = 'a'; $row<='h'; $row++){
        $alphaLoop.='<td style="text-align: center;">'.$row.'</td>';
    }
    echo '<tr><td style="width: 30px;"></td>'.$alphaLoop.'</tr>';

    $index = 8;
    for ($row = 1; $row<=8; $row++){
        echo '<tr>';
        echo '<td width="30px">'.$index.'</td>';
        for ($col = 1; $col<=8; $col++){
            $total = $row+$col;
            if ($total % 2 == 0){
                echo '<td style="background: #fff; width: 12%; height: 100px;"></td>';
            }else{
                echo '<td style="background: #000; width: 12%; height: 100px;"></td>';
            }
        }
        echo '</tr>';

        $index--;
    }
    ?>
</table>