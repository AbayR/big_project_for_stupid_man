<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$bonus = $_POST['bonus'];
/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `products` (`id`, `title`, `price`,`bonus`, `description`) VALUES (NULL, '$title', '$price','$bonus', '$description')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../../dashboard.php?cat=website-content&subcat=calculator');