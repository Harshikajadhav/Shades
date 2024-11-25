
<style>.errorColor {color: #D30000;}
       form input{
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}


.contact{
    width: 80%;
    margin: 50px auto;
}

.contact-box{
    background: white;
    display: flex;
}

.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}

.contact-right{
    flex-basis: 60%;
    padding: 40px;
    background: #ff523b;
    color: white;
}
</style>

    










<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query="INSERT INTO contact (name, number, email, address) VALUES('$name','$number','$email','$address')";
    $data=mysqli_query($conn,$query);
    if ($data){
        ?>
        <script type="text/javascript">
            alert("Data Saved Successfully");
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Please Try Again");
        </script>
        <?php
    }
}



?>





    

    <script>
        function validateform(){
            var name=document.contact.name.value;
            var email=document.contact.email.value;
            
            if (name==null || name==""){
                alert("Name can't be empty");
                return false;
            }else if(email==null || email==""){
                alert("Email can't be empty");
                return false;
            }
        }
    </script>

            <!-- contact section starts  -->

<div class="contact">
    <h1>Connect with us</h1>
    <p>We would love to respond your queries and help you succeed. Feel free to get in touch with us.</p>
    <div class="contact-box">
        <div class="contact-left">
            <h3>Send your request</h3><br>
            <form name="contact" method="post" onsubmit="return validateform()">
                <div class="input-row"><span class="errorColor">(* mandatory fields) </span>
                    
                    <div class="input-group">
                        <label>Name : <span class="errorColor">*</span></label>
                        <input type="text" placeholder="Your Name" name="name">
                    </div>

                    <div class="input-group">
                        <label>Phone Number : </label>
                        <input type="text" placeholder="+91 9810001111" name="number">
                    </div>

                    <div class="input-group">
                        <label>Email : <span class="errorColor">*</span></label>
                        <input type="text" placeholder="xyz@gmail.com" name="email">
                    </div>

                    <div class="input-group">
                        <label> Address <label>
                        <input type="text" placeholder="Your Address" name="address">
                    </div>
                </div>

                <input type="submit" value="Send" class="btn" name="submit">

            </form>

        </div>

    
        <div class="contact-right">
            <h3>Reach Us</h3><br><br>
            <table>
                <tr>
                    <td>Email</td>
                    <td>shadesofficial@gmail.com</td></tr>

                <tr>
                    <td>Phone</td>
                    <td>+91 9910001111</td><br>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>303, Ground Floor, 7th Cross<br>
                    Vidhya Road, Opp to Mumbai Station<br>
                    Mumbai, 200310</td>
                </tr>
            </table>
        </div>  
    </div>
</div>

<!-- contact section ends -->



