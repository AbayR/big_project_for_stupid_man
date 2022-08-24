<?php include '../assets/navi.php'?>
<br><br>
<link rel="stylesheet" href="style.css">
  <script>

function myFunction() {

    var x;

    var r = confirm("Мы скоро свяжемся с вами!");

    if (r == true) {

        x = "Its okay";

    }

    else {

        x = "Извините что то пошло не так";

    }

    document.getElementById("demo").innerHTML = x;

}

</script>

<section class="footer_get_touch_outer">
    <div class="container">
      <div class="footer_get_touch_inner grid-70-30">
        <div class="colmun-70 get_form">
          <div class="get_form_inner">
            <div class="get_form_inner_text">
              <h3>Оставайтесь на связи</h3>
            </div>
            <form class="form" action="contactus.php" method="POST">
              <div class="grid-50-50">
                <input type="text" name="name" id="name" placeholder="Имя">

                <input type="email" name="email" id="email" placeholder="Email" >
                <input type="tel" name="contact" id="contact" placeholder="Телефон">
              </div>
              <div class="grid-full">
                <textarea placeholder="Сообщение" cols="30" rows="10" name="comments" id="comments"></textarea> <br><br>
                <input type="submit" name="submit" onclick="myFunction()" value="Отправить">
              </div>
            </form>
          </div>
        </div>
        <div class="colmun-30 get_say_form">
          <h5>Свяжитесь со мной!</h5>
          <ul class="get_say_info_sec">
            <li>
            <i class="fa-solid fa-square-envelope"></i>
              <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
            </li>
            <li>
            <i class="fa-brands fa-instagram-square"></i>
              <a href="<?php echo $instagram ?>">Instagram</a>
            </li>
            <li>
            <i class="fa-brands fa-whatsapp-square"></i>
              <a href="https://whatsa.me/<?php echo $mobile ?>"><?php echo $mobile ?></a> 
            </li>
          </ul>       
        </div>        
      </div>
    </div>
  </section>
  <br><br>
    <?php include '../assets/footer.php'?>
</body>
</html>