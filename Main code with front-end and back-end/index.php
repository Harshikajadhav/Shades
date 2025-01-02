<?php
session_start();
include 'connection.php';
?>
<html>
        <?php
        include 'header.php';
        ?>
        
<?php
        if($_GET['p'] == 'home')
            {
                include('homepage.php');  
            }
        else
            if($_GET['p'] == 'products')
            {
            include('products.php');
            }
            else
            if($_GET['p'] == 'productsdetails')
            {
            include('product-page.php');
            }
        else
            if($_GET['p'] == 'order')
            {
                include('shipping_details.php');  
            }
            else
            if($_GET['p'] == 'confirmOrder')
            {
                include('order_confirmation.php');  
            }

        else
            if($_GET['p'] == 'about')
            {
                include('about.php');
            }
        else
            if($_GET['p'] == 'contact')
            {
                include('contact.php');
            }
            else
            if($_GET['p'] == 'account')
            {
                include('account.php');
            }
            else
            if($_GET['p'] == 'details')
            {
                include('product-page.php');
            }
            else
            if($_GET['p'] == 'cart')
            {
                include('cart.php');
            }
            else
            if($_GET['p'] == 'viewcart')
            {
                include('viewcart.php');
            }
            else
            if($_GET['p'] == 'checkout')
            {
                include('checkout.php');
            }
            else
            if($_GET['p'] == 'payment')
            {
                include('payment.php');
            }
            else
            if($_GET['p'] == 'logout')
            {
                include('logout.php');
            }
            
            ?>
        <?php
            include('footer.php');?>

   
        
</body>
</html>