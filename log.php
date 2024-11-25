<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `registration` WHERE username = '$username' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
         $session_id=session_id();

        $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where sessionid = '$session_id' AND order_id IS NULL ") or die('query failed');
               if(mysqli_num_rows($cart_query) > 0){
                    header('location:index.php?p=order');
                }else
                {
                header('location:index.php?p=home');
        }
        
     }else{
        ?>
    <script type="text/javascript">
            alert("Incorrect Password or Username");
        </script>
    <?php  
    }

}

?>