<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

include('../config/database.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Цены</title>
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
.slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #04AA6D; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #04AA6D; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

</style>
<body>
    <table>
        <tr>
            <th>Размер</th>
            <th>Цена за одну фотографию</th>
            <th>Количество (<1000)</th>
            <th>Итоговая цена</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");
            $i = 0;

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
                        <td><p><?= $product[2] ?>₽</p></td>
                        <td>
                            <div class="slidecontainer">
                                <input type="number" min="1" max="1000" value="1" class="slider" id="myRange<?= $i ?>">
                                <p> Количество: <span id="demo1<?= $i ?>"></span></p>
                            </div>
                        </td>
                        <td>
                                <p> <span id="demo<?= $i ?>"></span>₽</p>
                        </td>
                    </tr>


    <script>
        var sum<?php echo $i; ?> = 0;
        var check<?php echo $i; ?> = 0;
        var total = 0;

        var slider<?php echo $i; ?> = document.getElementById("myRange<?php echo $i; ?>");
        var output1<?php echo $i; ?> = document.getElementById("demo1<?php echo $i; ?>");
        var output<?php echo $i; ?> = document.getElementById("demo<?php echo $i; ?>");
        var price<?php echo $i; ?> = <?= $product[2] ?>;

        output<?php echo $i; ?>.innerHTML = slider<?php echo $i; ?>.value; // Display the default slider value
        output1<?php echo $i; ?>.innerHTML = slider<?php echo $i; ?>.value; 

        // Update the current slider value (each time you drag the slider handle)
        slider<?php echo $i; ?>.oninput = function() {          
            output1<?php echo $i; ?>.innerHTML = this.value;

            sum<?php echo $i; ?> = this.value*price<?php echo $i; ?>; //сумма цена*кол-во

            output<?php echo $i; ?>.innerHTML = sum<?php echo $i; ?>; //итоговая цена за конкретный товар с кол-во

            total = total + (sum<?php echo $i; ?> - check<?php echo $i; ?>); // полная итоговая сумма с учетом всех товаров

            check<?php echo $i; ?> = sum<?php echo $i; ?>; 
            
            document.getElementById("itog").innerHTML = total;
        }
        


    </script>
    <?php
            $i=$i+1;
        }
        ?>

                    </table>

                    <p>Итого: <span id="itog"></span>₽</p>

</body>
</html>
