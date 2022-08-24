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
   $query="SELECT * FROM home_content WHERE id=4  ";
   $res= $conn->query($query);
   $editData=$res->fetch_assoc();
   $contentSection= $editData['content_section'];
   $firstTitle= $editData['first_title'];
   $secondTitle= $editData['second_title'];
   $description= $editData['description'];

   $sql2="SELECT * FROM home_photo ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql2);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
   $pr1=!empty($data['pr1'])?$data['pr1']:'';
   $pr2=!empty($data['pr2'])?$data['pr2']:'';
   $pr3=!empty($data['pr3'])?$data['pr3']:'';
   $ft1=!empty($data['ft1'])?$data['ft1']:'';
   $ft2=!empty($data['ft2'])?$data['ft2']:'';
   $ft3=!empty($data['ft3'])?$data['ft3']:'';
   $ft4=!empty($data['ft4'])?$data['ft4']:'';
   $ft5=!empty($data['ft5'])?$data['ft5']:'';
   $ft6=!empty($data['ft6'])?$data['ft6']:'';
   $ft7=!empty($data['ft7'])?$data['ft7']:'';
   $ft8=!empty($data['ft8'])?$data['ft8']:'';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?= $websiteName ?></title>
    <link rel="icon" type="../images/x-icon" href="../images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../main/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
  </head>
  <body>
 <nav class="navbar">
    <div class="content">
      <div class="logo">
          <div class="block_column" style="width:60%;">
      <img class = "logo" src="../../phpadmin/assets/images/<?php echo $websiteLogo ?>" style="width: 100%;height: 70px;"> <a href="index.php" style="font-size:15px; font-weight:600; text-transform:uppercase;">сервис печати фотографий</a>
          </div>
      <style>
          .block_column{
              display:flex;
              align-items:flex-end;
          }
      </style>
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
        <a class="nav-link" class="nav-link" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
      </li>
      
       <?php
     }elseif($i==6){
      ?>
        <li class="nav-item">
        <a class="nav-link" class="nav-link" href="<?= $menu[3]; ?>">
        <img src="../images/avito.png" style="width:70px; height:40px;"></a>
      </li>
       <?php
          }elseif($i==7){
            ?>
            <div class="dropdown">
        <li class="nav-item">
           <a class="nav-link dropdown-btn" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 18px;
  font-weight: 500; transition: all 0.3s ease; margin-left:25px;">ЕЩЁ</a>
        </li>

    <div class="dropdown-content">
    <a class="dropdown-item" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
             <?php
          }elseif($i>7){
            ?>
            <a class="dropdown-item" href="<?= $menu[3]; ?>"><?= $menu[2]; ?></a>
          </div>
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
  nav{
        background-color:white;
    }

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

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
  color: black;
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
  body.disabled{
    overflow: hidden;
  }
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
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          var links = document.querySelectorAll(".menu-list li a");
          var linka = document.querySelectorAll(".logo a");
          links.forEach((link)=>link.style.color = "#ffffff");
          linka.forEach((link)=>link.style.color = "#ffffff");
  } else {
    var links = document.querySelectorAll(".menu-list li a");
    var linka = document.querySelectorAll(".logo a");
    links.forEach((link)=>link.style.color = "#000000");
    linka.forEach((link)=>link.style.color = "#000000");
  }
    }
  </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>