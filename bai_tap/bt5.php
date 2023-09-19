<?php
/* In bàn cờ vua
//C1:
<?php
    for($i = 0; $i < 8;$i++) {
      echo "<tr>";
       if($i % 2 == 0) {
         for ($j = 0; $j < 8; $j++) {

           if ($j % 2 == 0) {
            echo '<td style="background:white; width: 12.5%;height: 12.5%"></td>';
          } else {
            echo '<td style="background:black; width: 12.5%;height: 12.5%"></td>';
          }
          
        }
       }else{
        for ($j = 0; $j < 8; $j++) {
          if ($j % 2 == 1) {
            echo ' <td style="background:white; width: 12.5%;height: 12.5%"></td>';
          } else {
            echo ' <td style="background:black; width: 12.5%;height: 12.5%"></td>';
          }
        }
       }
       echo "</tr>";
    }
  ?>
*/
?>


<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
  <!-- C2 -->
  <?php
  $col_list = null;
  for ($col_index = 'a'; $col_index <= 'h'; $col_index++) {
    $col_list .= '<td style="text-align:center">' . $col_index . '</td>';
  }
  echo '<tr><td></td>' . $col_list . '</tr>';
  ?>

  <?php
  for ($row = 1; $row <= 8; $row++) {
    $index = 9;
    echo '<tr>';
    echo '<td>' . ($index - $row) . '</td>';

    for ($col = 1; $col <= 8; $col++) {
      $total = $col + $row;
      if($total % 2 == 0) {
        echo '<td style="background:white; width: 12%;height: 12%"></td>';
      }else{
        echo '<td style="background:black; width: 12%;height: 12%"></td>';
      }
    }

    echo '<td>' . $row . '</td>';
    echo '</tr>';
  }
  ?>

  <?php
  $col_list = null;
  for ($col_index = 'a'; $col_index <= 'h'; $col_index++) {
    $col_list .= '<td style="text-align:center">' . $col_index . '</td>';
  }
  echo '<tr><td></td>' . $col_list . '</tr>';
  ?>
</table>