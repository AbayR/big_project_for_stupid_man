<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>
<?php include '../assets/navi.php' ?>
<br><br><br><br><br><br>


<div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    

<style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');


.clearfix:before,
.clearfix:after {
	content: " ";
	display: table;
}

.clearfix:after {
	clear: both;
}


h1 {
	color: #ccc;
	text-align: center;
}

a {
  color: #ccc;
  text-decoration: none;
  outline: none;
}

/*Fun begins*/
.tab_container {
	width: 100%;
	margin: 0 auto;
	padding-top: 70px;
	position: relative;
}

label {
  font-weight: 700;
  font-size: 18px;
  display: block;
  float: left;
  width: 50%;
  padding: 1.5em;
  color: #757575;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  background: #f0f0f0;
}

input[type="radio"], section {
  clear: both;
  padding-top: 10px;
  display: none;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2 {
  display: block;
  padding: 20px;
  background: #fff;
  color: #999;
  border-bottom: 2px solid #f0f0f0;
}

.tab_container .tab-content table,
.tab_container .tab-content h3 {
  -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}
.tab_container .tab-content  {
  text-align: center;
}

.tab_container [id^="tab"]:checked + label {
  background: #fff;
  box-shadow: inset 0 3px #0CE;
}

.tab_container [id^="tab"]:checked + label .fa {
  color: #0CE;
}

label .fa {
  font-size: 1.3em;
  margin: 0 0.4em 0 0;
}

/*Media query*/
@media only screen and (max-width: 900px) {
  label span {
    display: none;
  }
  
  .tab_container {
    width: 98%;
  }
}

/*Content Animation*/
@keyframes fadeInScale {
  0% {
  	transform: scale(0.9);
  	opacity: 0;
  }
  
  100% {
  	transform: scale(1);
  	opacity: 1;
  }
}
</style>

<style>

.table td,
.table th {
    text-align:center;
  font-size:20px;
  padding: 10px;
}

.tooltip .arrow:before {
  border-left-color: #dc3545;
}
.tooltip .tooltip-inner {
  background: #dc3545;
}
</style>
		<div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1"><i class="fa fa-code"></i><span>Обычный</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2"><i class="fa fa-pencil-square-o"></i><span>Выгодный</span></label>


			<section id="content1" class="tab-content">
            <div class="container mt-5">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="bg-dark text-white">
          <th>Размер</th>
                        <th>Цена за одну фотографию</th>
                        <th>Количество</th>
                         <th>Итоговая цена</th>
          </tr>
        </thead>
        <tbody>
        <tr class="alert" role="alert">
                            <?php

/*
 * Делаем выборку всех строк из таблицы "products"
 */

$products = mysqli_query($connect, "SELECT * FROM `products` WHERE `description` LIKE '%обычный%'");
$i = 10;

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
                 <input type="range" class="form-range" max="1000" value="0" class="slider" id="myRange<?= $i ?>" /><span id="colvo<?= $i ?>" style="margin-left:5px;"></span>
                </div>
            </td>
            <td>
                    <p> <span id="price<?= $i ?>"></span>₽</p>
            </td>
        </tr>


<script>
var sum<?php echo $i; ?> = 0;
var sumb<?php echo $i; ?> = 0;

var check<?php echo $i; ?> = 0;
var total = 0;

var slider<?php echo $i; ?> = document.getElementById("myRange<?php echo $i; ?>");
var output1<?php echo $i; ?> = document.getElementById("colvo<?php echo $i; ?>");
var output<?php echo $i; ?> = document.getElementById("price<?php echo $i; ?>");
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

        </tbody>
      </table>
    </div>
  </div>

			</section>

			<section id="content2" class="tab-content">
            <div class="container mt-5">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="bg-dark text-white">
          <th>Размер</th>
            <th>Цена за одну фотографию</th>
            <th>Количество</th>
            <th>Итоговая цена</th>
            <th>Итоговые бонусы</th>
          </tr>
        </thead>
        <tbody>
        <?php

/*
 * Делаем выборку всех строк из таблицы "products"
 */

$products = mysqli_query($connect, "SELECT * FROM `products` WHERE `description` LIKE '%выгодный%'");
$i = 100;

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
                <input type="range" class="form-range" max="1000" value="0" class="slider" id="myRange<?= $i ?>" /><span id="colvo<?= $i ?>" style="margin-left:5px;"></span>
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
var btotal = 0;

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

document.getElementById("itogb").innerHTML = total;
}



</script>
<?php
$i=$i+1;
}
?>

        </tbody>
      </table>
    </div>
  </div>
			</section>
		</div>

                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis modi ullam asperiores maxime, qui aliquam reiciendis ea voluptatem quo? Vitae, voluptas iusto laboriosam eligendi laborum aliquid sapiente repudiandae dignissimos obcaecati.</p>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Итого:</dt>
                            <dd class="text-right ml-3"><strong><span id="itog"></span>₽</strong></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Итого Выгодный:</dt>
                            <dd class="text-right ml-3"><strong><span id="itogb"></span>₽</strong></dd>
                        </dl>
                        <hr>  <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Заказать</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
