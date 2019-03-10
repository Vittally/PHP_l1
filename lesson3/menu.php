<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Меню</title>
    <style>
        .menu {
            display: ;
            float: left;
        }
        .menu > li {
            list-style-type: none;
            text-decoration: none;
        }
        .menu > li > a {
            text-decoration: none;
            color: darkslategray;
        }.menu > li > a:hover {
            text-decoration: underline;
            color: blue;
         }
    </style>
</head>
<body>
<?php
$menu = ["Главная" => "#1","Товары" =>  "#2","Контакты" => "#3"];
$sub_menu = ["Шампуни" => "#","Гели для душа" => "#"];

foreach ($menu as $item => $refer) {
    echo "<ul class='menu'>
            <li><a href='$refer'>$item</a></li>
        </ul>";
}
?>

</body>
</html>