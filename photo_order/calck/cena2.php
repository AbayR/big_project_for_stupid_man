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
            <th>Бонус за одну фотографию</th>
            <th>Количество</th>
            <th>Итоговая цена</th>
            <th>Итоговые бонусы</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products` WHERE `description` LIKE '%выгодный%'");
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
                        <td><p><?= $product[3] ?>B</p></td>
                        <td>
                            <div class="slidecontainer">
                                <input type="number" min="0" max="1000" value="0" class="slider" id="myRange<?= $i ?>">
                                <p> Количество: <span id="colvo<?= $i ?>"></span></p>
                            </div>
                        </td>
                        <td>
                                <p> <span id="price<?= $i ?>"></span>₽</p>
                        </td>
                        <td>
                                <p> <span id="bonus<?= $i ?>"></span>B</p>
                        </td>
                    </tr>


    <script>
        var sum<?php echo $i; ?> = 0;
        var sumb<?php echo $i; ?> = 0;

        var check<?php echo $i; ?> = 0;
        var total = 0;

        var slider<?php echo $i; ?> = document.getElementById("myRange<?php echo $i; ?>");
        var cc<?php echo $i; ?> = document.getElementById("colvo<?php echo $i; ?>");
        var oo<?php echo $i; ?> = document.getElementById("price<?php echo $i; ?>");
        var bb<?php echo $i; ?> = document.getElementById("bonus<?php echo $i; ?>");
        var price<?php echo $i; ?> = <?= $product[2] ?>;
		var bonus<?php echo $i; ?> = <?= $product[3] ?>;
        oo<?php echo $i; ?>.innerHTML = slider<?php echo $i; ?>.value; // Display the default slider value
        cc<?php echo $i; ?>.innerHTML = slider<?php echo $i; ?>.value; 
        bb<?php echo $i; ?>.innerHTML = slider<?php echo $i; ?>.value; 
        // Update the current slider value (each time you drag the slider handle)
        slider<?php echo $i; ?>.oninput = function() {          
            cc<?php echo $i; ?>.innerHTML = this.value;

            sum<?php echo $i; ?> = this.value*price<?php echo $i; ?>; //сумма цена*кол-во

            sumb<?php echo $i; ?> = this.value*bonus<?php echo $i; ?>; 

            oo<?php echo $i; ?>.innerHTML = sum<?php echo $i; ?>; //итоговая цена за конкретный товар с кол-во

            bb<?php echo $i; ?>.innerHTML = sumb<?php echo $i; ?>; 

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

</script>
</body>
</html>
