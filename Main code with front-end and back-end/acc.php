
<head>
    <meta charset="UTF-8">
    <title>All Products - Shades</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
</head>
<style>
    form input{
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}
    </style>


    
<body>

<!--      ACOOUNT PAGE       -->


<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        
                            <!-----Login-------->
                        <form id="LoginForm" method="post" action="log.php">
                            <input required type="text" placeholder="Username" name="username">
                            <input required type="password" placeholder="Password" name="password">
                            <input  type="submit" value="Login" class="abtn" name="submit">
                            <a href="">Forgot Password</a>
                        </form>


                        <!-----Register-------->
                        <form id="RegForm" method="post" action="registration.php">
                            <label>Name</label>
                            <input required type="text" placeholder="fullname" name="fullname">
                            <label>Username</label>
                            <input required type="text" placeholder="Username" name="username">
                            <label>Email</label>
                            <input required type="email" placeholder="Email" name="email">
                            <label>Password</label>
                            <input required type="password" placeholder="Password" name="password">
                            <input required type="submit" value="Registration" class="abtn" name="submit">
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>


            <!----------js for Toggle Form -------------->

        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }

            function login(){
                LoginForm.style.transform = "translateX(300px)";
                RegForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }

        </script>







