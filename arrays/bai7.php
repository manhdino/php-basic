<?php
/*Bài 07: Hiển thị menu đa cấp sử dụng giải thuật đệ quy*/
$menuArr = [
    [
        'title' => 'Trang chủ',
        'link' => '#'
    ],

    [
        'title' => 'Giới thiệu',
        'link' => '#'
    ],

    [
        'title' => 'Dịch vụ',
        'link' => '#',
        'sub' => [
            [
                'title' => 'Thiết kế web',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Web bán hàng',
                        'link' => '#',
                        'sub' => [
                            [
                                'title' => 'Web giới thiệu sản phẩm',
                                'link' => '#'
                            ],

                            [
                                'title' => 'Web có giỏ hàng',
                                'link' => '#'
                            ]
                        ]
                    ],

                    [
                        'title' => 'Web tin tức',
                        'link' => '#'
                    ]
                ]
            ],

            [
                'title' => 'Dịch vụ SEO',
                'link' => '#'
            ],

            [
                'title' => 'Phần mềm',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Quản lý bán hàng',
                        'link' => '#'
                    ],

                    [
                        'title' => 'Quản lý khách hàng (CRM)',
                        'link' => '#'
                    ]
                ]
            ]
        ]
    ],

    [
        'title' => 'Tin tức',
        'link' => '#'
    ],

    [
        'title' => 'Liên hệ',
        'link' => '#'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-DeQuy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ul {
            margin: 0;
            padding: 0;
            background: orange;
            list-style: none;
        }
        li{
            position: relative;
            display: inline-block;
            width: 150px;
            padding: 8px;
            border-right: 1px solid #dddddd;
        }
        ul li :last-child{
            border: none;
        }
        .sub-menu{
            display: none;
            position: absolute;
        }
        li:hover .sub-menu{
            display: block;
        }

   
    </style>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Dịch vụ</a>
                <ul class="sub-menu">
                    <li><a href="#">Thiết kế web</a></li>
                    <li><a href="#">Dịch vụ SEO</a></li>
                    <li><a href="#">Phần mềm</a>
                        <ul class="sub-menu">
                            <li><a href="#">Quản lý bán hàng</a></li>
                            <li><a href="#">Quản lý khách hàng CRM</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </div>
</body>

</html>