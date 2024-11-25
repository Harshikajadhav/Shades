 <head>
    <meta charset="UTF-8">
    <title>Shades EyeWear | One stop solution of Eyewear, Sunglasses, & Lenses</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>

    <style type="text/css">
        @charset "UTF-8";
.profileblock {
  width: 140px;
  height: 48px;
  position: relative;
}
.profileblock:hover .tipmenu {
  padding: 10px 20px;
  display: block;
  height: 40px;
  font-size: 14px;
}
.profileblock:hover .tipmenu:after {
  top: -14px;
}
.profileblock .profile {
  height: 36px;
  width: 36px;
  border: 1px solid #000;
  float: right;
  margin-left: 12px;
  background-size: 36px 36px;
}
.profileblock .name {
  font-weight: bold;
}
.profileblock .name, .profileblock .position {
  font-family: "Helvetica";
  text-align: right;
}

.tipmenu {
  background: #992200;
  -moz-transition: all 0.03s ease-out;
  -webkit-transition: all 0.03s ease-out;
  -o-transition: all 0.03s ease-out;
  transition: all 0.03s ease-out;
  position: absolute;
  width: 100px;
  padding: 0 20px;
  height: 0;
  font-size: 0;
  top: 46px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.tipmenu:after {
  color: #992200;
  content: "▲";
  position: absolute;
  right: 10%;
  margin: 0;
}
.tipmenu a {
  display: block;
  text-align: center;
  text-decoration: none;
  color: #FFF;
  font-weight: bold;
  font-family: "Helvetica";
}
.tipmenu a:hover {
  text-decoration: underline;
}

.profile {
  
}

    </style>
</head>

<div class="container">
    <div class="navbaar">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" width="125px"></a>
        </div>
        
        <nav>

            <ul id="MenuItems">
                <li><a href="index.php?p=home">Home</a></li>
                <li><a href="index.php?p=products">Products</a></li>
                <!--<li><a href="index.php?p=order">Order</a></li>-->
                <li><a href="index.php?p=about">About</a></li>
                <li><a href="index.php?p=contact">Contact</a></li>
                <?php
                if(!isset($_SESSION['user_id'])){
                 ?>
                 <li><a href="index.php?p=account">Account</a></li>
               <?php } ?>
                <?php
                if(isset($_SESSION['user_id'])){
                 ?>
                <li>
                    <div class='profileblock'>
  
  <div class='name'>Welcome <?php echo $_SESSION['fullname'];?></div>
  
  <div class='tipmenu'>
    
    <a href='index.php?p=logout'>sign-out</a>
  </div>
</div>
                </li>
            <?php } ?>
            </ul>
        </nav>
        <a href="index.php?p=cart"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>