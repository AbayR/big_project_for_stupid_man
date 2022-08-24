<?php
  include('../config/database.php');
  $query="SELECT * FROM categories";
  $res= $conn->query($query);
  $menus=mysqli_fetch_all($res);
  $sql1="SELECT * FROM website_setting ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $websiteTitle=!empty($data['website_title'])?$data['website_title']:'';
  $websiteName=!empty($data['website_name'])?$data['website_name']:'';
  $websiteLogo=!empty($data['website_logo'])?$data['website_logo']:'';
  $websiteFavicon=!empty($data['website_favicon'])?$data['website_favicon']:'';
  $metaKeyword=!empty($data['meta_keyword'])?$data['meta_keyword']:'';
  
  $metaDescription=!empty($data['meta_description'])?$data['meta_description']:'';
  $googleVarificationCode=!empty($data['google_varification_code'])?$data['google_varification_code']:'';
  $googleAnalyticsCode=!empty($data['google_analytics_code'])?$data['google_varification_code']:'';
    $sql2="SELECT * FROM contact_details ORDER BY id DESC LIMIT 0,1";
  $res1       = $conn->query($sql2);
  $data       = $res1->fetch_assoc();
  $email      = !empty($data['email'])?$data['email']:'';
  $mobile     = !empty($data['mobile'])?$data['mobile']:'';
  $address    = !empty($data['address'])?$data['address']:'';
  $google_map = !empty($data['google_map'])?$data['google_map']:'';
  $facebook   = !empty($data['facebook'])?$data['facebook']:'';
  $google_plus   = !empty($data['google_plus'])?$data['google_plus']:'';
  $twitter    = !empty($data['twitter'])?$data['twitter']:'';
  $linkedin   = !empty($data['linkedin'])?$data['linkedin']:'';
  $youtube    = !empty($data['youtube'])?$data['youtube']:'';
  $instagram  = !empty($data['instagram'])?$data['instagram']:'';
  $id         = !empty($data['id'])?$data['id']:'';
           
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    
</head>
<body>

 
     
      <nav class="navbar">
    <div class="content">
      <div class="logo">
      <a href="../main/index.php" class="navbar-brand"><img class = "logo" src="../../phpadmin/assets/images/<?php echo $websiteLogo ?>" style="width: 70px;height: 60px;">сервис печати фотографий</a>
      </div>
      <ul class="menu-list">
        <div class="icone cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <?php
            $i=0;
        foreach ($menus as $menu) {
          $i+=1;
          if ($i<=5) {
            ?>
            <li class="nav-item">
        <a class="nav-link" class="nav-link" style="color: white;" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
      </li>
      
       <?php
          }elseif($i==6){
            ?>
            <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 18px;
  font-weight: 500; transition: all 0.3s ease; margin-left: 25px;">ЕЩЁ</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
             <?php
          }elseif($i>6){
            ?>
            <a class="dropdown-item" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
             <?php
          }

      ?>
      
            
      <?php
        }
        ?>
        
      </ul>
      <div class="icone menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <style>
    ::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #888;
}
::selection{
  background: rgb(0,123,255,0.3);
}
.content{
  max-width: 1550px;
  margin: auto;
  padding: 0 15px;
}
.navbar{
  background:#1b1b1b;
  position: fixed;
  width: 100%;
  z-index: 2;
  padding: 25px 0;
  transition: all 0.3s ease;
}
.navbar.sticky{
  background: #1b1b1b;
  padding: 10px 0;
  box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.1);
}
.navbar .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.navbar .logo a{
  color: #fff;
  text-decoration: none;
}
.navbar .menu-list{
  display: inline-flex;
}
.menu-list li{
  list-style: none;
}
.menu-list li a{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  margin-left: 25px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.menu-list li a:hover{
  color: #007bff;
}
.icone{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.menu-list .cancel-btn{
  position: absolute;
  right: 30px;
  top: 20px;
}
@media (max-width: 1230px) {
  .content{
    padding: 0 60px;
  }
}
@media (max-width: 1100px) {
  .content{
    padding: 0 40px;
  }
}
@media (max-width: 900px) {
  .content{
    padding: 0 30px;
  }
}
@media (max-width: 868px) {
  
  .icone{
    display: block;
  }
  .icone.hide{
    display: none;
  }
  .navbar .menu-list{
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 400px;
    left: -100%;
    top: 0px;
    display: block;
    padding: 40px 0;
    text-align: center;
    background: #222;
    transition: all 0.3s ease;
  }
  .navbar.show .menu-list{
    left: 0%;
  }
  .navbar .menu-list li{
    margin-top: 45px;
  }
  .navbar .menu-list li a{
    font-size: 23px;
    margin-left: -100%;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  .navbar.show .menu-list li a{
    margin-left: 0px;
  }
}
@media (max-width: 380px) {
  .navbar .logo a{
    font-size: 27px;
  }
}
  </style>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>