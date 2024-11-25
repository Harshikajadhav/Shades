<?php 
$orderNo = $_GET['conf'];
$user_id = $_SESSION['user_id'];
$orderShippingQuery = mysqli_query($conn, "SELECT * FROM orders INNER JOIN shipping_deails ON orders.order_id = shipping_deails.order_id where orders.order_number = '$orderNo' AND user_id = '$user_id' ");

if(mysqli_num_rows($orderShippingQuery) > 0){
    $fetchOrder = mysqli_fetch_assoc($orderShippingQuery);
$orderId = $fetchOrder['order_id'];
    //
?>

<style type="text/css">

.shipping-page {
  margin: 10px auto;
}
form input{
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}


.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.success {
    padding: 20px;
  background-color: #04AA6D;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

<?php 

$cart_query = mysqli_query($conn, "SELECT * FROM `cart` where  user_id = '$user_id' AND order_id = '$orderId' ");
if(mysqli_num_rows($cart_query) > 0){

    ?>
    <div class="contact">
        <h1>&emsp;&emsp;&emsp;&emsp;</b>  
            Order Confirmation</h1>
<div class="success">
  
  <strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Congratulations!</strong> Your order is placed successfully, Your order number is <strong>#<?php echo $fetchOrder['order_number'];?></strong>.
</div>
        <div class="contact-box">
            <div class="contact-left"><br><br><br>
                <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Shipping Deails</h3>
                <form name="shippingForm" id="shippingForm" action="" method="POST">
                    <div class="input-row">
                    <div class="input-group">
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;        
                    <label>Name:</label>
                            <?php echo $fetchOrder['shipping_name'];?>
                        </div>

                        <div class="input-group">
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <label>Phone Number:</label>
                            <?php echo $fetchOrder['shipping_phone'];?>
                        </div>

                        <div class="input-group">
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <label>Email:</label>
                            <?php echo $fetchOrder['shipping_email'];?>
                        </div>
                        <div class="input-group">
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <label> Address: <label>
                                <?php echo $fetchOrder['shipping_address'];?>
                            </div>
                        </div>

                        
                    </form>

                </div>
            </div>
        </div>
        <br><br><br><br>



        <!-- contact section ends -->

    <?php }else{
        header('location:index.php?p=products');

    } 
}else {
    
header('location:index.php?p=products');    
}?>
