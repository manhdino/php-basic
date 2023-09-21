<!DOCTYPE html>
<html lang="en">
<!-- 2. Hiển thị danh sách khách hàng dưới dạng bảng. Bao gồm:
 * + STT
 * + Họ và tên
 * + Email
 * + Số điện thoại
 * + Địa chỉ
 * Lưu ý: Nếu địa chỉ email bị trùng, chỉ giữ lại 1 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        th,td {
            border: 1px solid black;
            padding: 8px;
        }

        thead th:first-child {
            width: 5%;
        }
    </style>
</head>

<body>
    <?php
    $customerArr = [
        [
            'name' => 'Hoàng An',
            'email' => 'hoangan.web@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ],

        [
            'name' => 'Anh Tuấn',
            'email' => 'anhtuan@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ],

        [
            'name' => 'Văn Toàn',
            'email' => 'vantoan@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ],

        [
            'name' => 'Hoàng An',
            'email' => 'hoangan.web@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ],

        [
            'name' => 'Văn Toản',
            'email' => 'vantoan@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ],

        [
            'name' => 'Hoàng An',
            'email' => 'hoangan.web@gmail.com',
            'phone' => '0388875179',
            'address' => 'Hà Nội'
        ]
    ];
    $indexDuplicate = []; //Lưu trữ các index trùng
    for ($i = 0; $i<count($customerArr)-1; $i++){
        for ($j = $i+1; $j<count($customerArr); $j++){
            if ($customerArr[$i]['email']==$customerArr[$j]['email']){
                $indexDuplicate[] = $j;
            }
        }
    }

    //Xoá các phần tử mảng trùng
    if (!empty($indexDuplicate)){
        foreach ($indexDuplicate as $index){
            if (isset($customerArr[$index])){
                unset($customerArr[$index]);
            }
        }
    }
    echo '<pre>';
    print_r($customerArr);
    echo '</pre>';
    ?>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>FullName</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($customerArr) && is_array($customerArr)) :
                $stt = 0;
                foreach ($customerArr as $item) :
                    ++$stt;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['address'] ?></td>
                    </tr>

                <?php
                endforeach;
            else : ?>
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