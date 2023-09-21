<html>
<head>
    <meta charset="utf-8"/>
    <title>Menu Dropdown</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        ul {
            /* The list-style-type specifies the type of list-item marker in a list. */
            list-style-type: none;
            margin: 0;
            padding: 0;
            /*The overflow property specifies what should happen if content overflows an element's box.*/
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .action a{
            background: red;
        }
        .action{
            float: right;
        }
    </style>
</head>
<body>
<?php
$menuArr = [
    [
        'title' => 'Home',
        'link' => '#',
        'class' => 'active',
    ],

    [
        'title' => 'News',
        'link' => '#',
        'class' => '',
    ],

    [
        'title' => 'Sản phẩm',
        'link' => '#',
        'class' => '',
        'sub' => [
            [
                'title' => 'Link 1',
                'link' => '#'
            ],

            [
                'title' => 'Link 2',
                'link' => '#'
            ],

            [
                'title' => 'Link 3',
                'link' => '#'
            ]

        ]
    ],

    [
        'title' => 'Dịch vụ',
        'link' => '#',
        'class' => '',
        'sub' => [
            [
                'title' => 'Dịch vụ 1',
                'link' => '#'
            ],

            [
                'title' => 'Dịch vụ 2',
                'link' => '#'
            ],

            [
                'title' => 'Dịch vụ 3',
                'link' => '#'
            ]

        ]
    ],

    [
        'title' => 'Buy Now',
        'link' => '#',
        'class' => 'action',
    ],
];

//echo '<pre>';
//print_r($menuArr);
//echo '</pre>';

if (!empty($menuArr)){
    echo '<ul>';

    //foreach loop
    foreach ($menuArr as $item){
        $class = !empty($item['class'])?' class="'.$item['class'].'"':null;

        $class  = !empty($item['sub'])?' class="dropdown"':$class;

        echo '<li'.$class.'><a href="'.$item['link'].'">'.$item['title'].'</a>';

        //Dropdown here
        if (!empty($item['sub'])){
            $subMenu = $item['sub'];
            echo '<div class="dropdown-content">';
            foreach ($subMenu as $sub){
                echo '<a href="'.$sub['link'].'">'.$sub['title'].'</a>';
            }
            echo '</div>';
        }

        echo '</li>';
    }

    echo '</ul>';
}
?>

</body>
</html>