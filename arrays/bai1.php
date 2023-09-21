<!DOCTYPE html>
<html>
<!-- * 1. Hiển thị menu dropdown cấp sử dụng mảng PHP -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  display: block;
  flex-direction: row;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
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
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="background-color:white;">
<?php
$menuArr = [
    [
        'title' => 'Home',
        'link' => '#',
    ],
    [
        'title' => 'News',
        'link' => '#',
    ],
    [
        'title' => 'News',
        'link' => '#',
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

];

if(!empty($menuArr)){
    echo '<div class="navbar">';
    foreach($menuArr as $item){

    }
}
?>
<ul class="navbar">
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li>  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> </li>
</ul>

<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>

</body>
</html>