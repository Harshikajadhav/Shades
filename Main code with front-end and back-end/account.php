
<style>
    form input{
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}

.inputlabel{
font-weight: ;
text-align: left;
float: left;
font-size: 14px;
}

.form-container {
  background: #fff;
  width: 300px;
  height: 491px;
  position: relative;
  text-align: center;
  padding: 20px 0;
  margin: auto;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}
    </style>


    


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
                        <form id="LoginForm" method="post" action="login.php">
                            <label class="inputlabel">Username</label>
                            <input type="text" required name="username">
                            <label class="inputlabel">Password</label>
                            <input type="password" required name="password">
                            <input type="submit" value="Login" class="abtn" name="submit">
                            <a href="">Forgot Password</a>
                        </form>


                        <!-----Register-------->
                        <form id="RegForm" method="post" action="registration.php">
                            <label class="inputlabel">Name</label>
                            <input required type="text" name="fullname">
                            <label class="inputlabel">Username</label>
                            <input required type="text" name="username">
                            <label class="inputlabel">Email</label>
                            <input required type="email" name="email">
                            <label class="inputlabel">Password</label>
                            <input required type="password" name="password">
                            <input type="submit" value="Registration" class="abtn" name="submit">
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







