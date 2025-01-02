<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $fullname=$_POST['fullname'];

    $select = mysqli_query($conn, "SELECT * FROM `registration` WHERE email = '$email' AND password = '$password'") or die('query failed');


    if(mysqli_num_rows($select) > 0){
        ?>
    <script type="text/javascript">
            alert("Username Aleready Taken");
        </script>
    <?php
     }else{
        $userRegistration = mysqli_query($conn, "INSERT INTO `registration`(fullname,username, email, password) VALUES('$fullname','$username', '$email', '$password')") ;
        $user_id = $conn->insert_id;
        
        $_SESSION['user_id'] = $user_id;
        $selectUser = mysqli_query($conn, "SELECT * FROM `registration` WHERE user_id = '$user_id'");

    if(mysqli_num_rows($selectUser) > 0){
        $userrow = mysqli_fetch_assoc($selectUser);
        $_SESSION['fullname'] = $userrow['fullname'];

    }
        
        $session_id=session_id();
        
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where sessionid = '$session_id' AND order_id IS NULL ") or die('query failed');
                if(mysqli_num_rows($cart_query) > 0){

                    $updateQuery = mysqli_query($conn, "UPDATE `cart` SET user_id = '$uid' WHERE sessionid = '$session_id' AND  order_id IS NULL") ;
                    header('location:index.php?p=order');
                }else
                {
                header('location:index.php?p=home');
        }

        
    }
}

?>