<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Price </th>
            <th>Bonus</th>
            <th>Description </th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td><a href="website-content/product.php?id=<?= $product[0] ?>">Просмотр</a></td>
                        <td><a href="website-content/update.php?id=<?= $product[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="website-content/vendor/delete.php?id=<?= $product[0] ?>">Удаление</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить новый</h3>
    <form action="website-content/vendor/create.php" method="post">
        <p>Продукт</p>
        <input type="text" name="title">
        <p>Тип</p>
        <select name="description">
            <option value="обычный">Обычный</option>
            <option value="выгодный">Выгодный</option>
        </select>
        <p>Цена</p>
        <input type="number" name="price"> <br> <br>
        <p>Бонус</p>
        <input type="number" step="0.001" name="bonus"> <br> <br>
        <button type="submit">Добавить
    </form>
</body>
</html>
