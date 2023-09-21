<html>
<head>
    <meta charset="utf-8"/>
    <title>Customer</title>
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

if (!empty($customerArr)){

    //Tìm phần tử mảng trùng
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
}
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th width="5%">STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($customerArr) && is_array($customerArr)):
        $count = 0;
        foreach ($customerArr as $item):
            $count++;
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['email']; ?></td>
        <td><?php echo $item['phone']; ?></td>
        <td><?php echo $item['address']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="5" style="text-align: center">Không có dữ liệu</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>
</body>
</html>