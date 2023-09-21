<?php
/* 3. Cho trước 1 đoạn văn bản, yêu cầu đếm số lần xuất hiện các ký tự trong chuỗi và hiển thị kết quả dưới dạng bảng. Bao gồm:
* + STT
* + Ký tự
* + Số lần xuất hiện
* */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charactor Count</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        td,
        th {
            border: 1px solid black;
            padding: 8px;
        }

        thead th:first-child {
            width: 10%;
        }
    </style>
</head>

<body>
    <?php
    $content = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis corrupti, veniam inventore accusantium eos magnam quae aperiam delectus ex maiores voluptate nam in reiciendis aliquid incidunt optio nesciunt culpa amet.';
    $numberCharactorAppears = [];
    if (strlen($content)) :
        for ($i = 0; $i < strlen($content); $i++) :
            $charactor = $content[$i];
            if (!empty($numberCharactorAppears[$charactor])) :
                $numberCharactorAppears[$charactor]++;
            else :
                $numberCharactorAppears[$charactor] = 1;
            endif;
        endfor;
    endif;
    ?>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Charactor</th>
                <th>Number of times a character appears</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($numberCharactorAppears) && is_array($numberCharactorAppears)) :
                $stt = 0;
                foreach ($numberCharactorAppears as $key => $value) :
                    $stt++;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo ($key == ' ') ? 'Space charactor' : $key ?></td>
                        <td><?php echo $value ?></td>
                    </tr>
                <?php
                endforeach;
            else :
                ?>
                <tr>
                    <td colspan="5" style="text-align: center">Không có dữ liệu</td>
                </tr>
            <?php
            endif;
            ?>
        </tbody>
    </table>
</body>

</html>