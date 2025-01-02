<style>

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
    }
</style>

<?php 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {

    $input_length = strlen($input);

    $random_string = '';

    for($i = 0; $i < $strength; $i++) {

        $random_character = $input[mt_rand(0, $input_length - 1)];

        $random_string .= $random_character;

    }

    return $random_string;

}
if(isset($_SESSION['user_id']))
{
    $session_id=session_id();
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['placeorderbtn']))
    {
        $shipping_name= $_POST['shipping_name'];
        $shipping_phone= $_POST['shipping_phone'];
        $shipping_email= $_POST['shipping_email'];
        $shipping_address= $_POST['shipping_address'];

        $user_id = $_SESSION['user_id'];
        $order_datetime = date('Y-m-d H:i:s');
        $order_total_payment = $_POST['order_total_payment'];
        $payment_status= 'paid';
        $order_status= 'pending';
        $order_number= generate_string($permitted_chars, 8);

        $insertOrdersDetails =mysqli_query($conn, "INSERT INTO `orders`(user_id,order_number, order_datetime, order_total_payment,payment_status,order_status) VALUES('$user_id', '$order_number', '$order_datetime', '$order_total_payment', '$payment_status', 'order_status')");
        
        if($insertOrdersDetails)
        {
         $order_id = $conn->insert_id;

         $insertShippingDetails =mysqli_query($conn, "INSERT INTO `shipping_deails`(order_id, shipping_name, shipping_phone, shipping_email,shipping_address) VALUES('$order_id','$shipping_name', '$shipping_phone', '$shipping_email', '$shipping_address')") ;
         if($insertShippingDetails)
         {


            $updateCartOrder = mysqli_query($conn, "UPDATE `cart` SET order_id = '$order_id' WHERE user_id = '$user_id' AND order_id IS NULL ") ;

            header('location:index.php?p=confirmOrder&conf='.$order_number);
            exit();
        }
    }
}
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
</style>
<?php 

$cart_query = mysqli_query($conn, "SELECT * FROM `cart` where sessionid = '$session_id' AND  user_id = '$user_id' AND order_id IS NULL ") or die('query failed');
if(mysqli_num_rows($cart_query) > 0){

    ?>
    <div class="contact">
        <h1>Place Order</h1>
        <p>Please fill these details to book your Order</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Shipping Deails</h3><br>
                <form name="shippingForm" id="shippingForm" action="" method="POST">
                    <?php
                    $grandTotal = 0;
                    while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                        $subTotal = ($fetch_cart['price'] * $fetch_cart['quantity'])
                        ?>
                        <input  type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                        <?php $grandTotal += $subTotal;
                    }
                    ?>
                    <input  type="hidden" name="order_total_payment" value="<?php echo $grandTotal; ?>">
                    <div class="input-row">

                        <div class="input-group">
                            <label>Name</label>
                            <input required name="shipping_name" id="shipping_name" type="text" placeholder="Your Name" placeholder="Your Name">
                        </div>

                        <div class="input-group">
                            <label>Phone Number</label>
                            <input required type="text" name="shipping_phone" id="shipping_phone" placeholder="+91 9810001111">
                        </div>

                        <div class="input-group">
                            <label>Email</label>
                            <input required type="text" name="shipping_email" id="shipping_email" placeholder="xyz@gmail.com">
                        </div>

                        <div class="input-group">
                            <label> Address <label><br>
                                <textarea required style="height: 100px; width: 450px;" name="shipping_address" id="shipping_address"></textarea>
                        </div>
                    </div>

                        <button type="submit" class="btn" name="placeorderbtn" id="placeorderbtn">Place Order</button>

                    </form>

            </div>


                <div class="contact-right">
                    <h3>Cart Details</h3>

                    <div class="small-container shipping-page" >
                        <table>
                            <tr>
                            
                                <!--<th>&emsp;Image</th>-->
                                <th>&emsp;Name</th>
                                <th>&emsp;Price</th>
                                <th>&emsp;Quantity</th>
                                <th>&emsp;Total Price</th>

                            </tr>
                            <tbody>
                                <?php
                                $grand_total = 0;
                                $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where sessionid = '$session_id' AND user_id = '$user_id' AND order_id IS NULL ") or die('query failed');
                                if(mysqli_num_rows($cart_query) > 0){
                                    while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                                        ?>


                                        <tr>
                                            <!--<td>&emsp;<img src="images/<?php /* echo $fetch_cart['image']; */?>" height="100" alt=""></td>-->
                                            <td>&emsp;<?php echo $fetch_cart['name']; ?></td>
                                            <td>&emsp;$<?php echo $fetch_cart['price']; ?>/-</td>
                                            <td>&emsp;&emsp;&emsp;
                                                <?php echo $fetch_cart['quantity']; ?>
                                                
                                            </td>
                                            <td>&emsp;$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>


                                        </tr>
                                        
                                        <?php
                                        $grand_total += $sub_total;
                                    }
                                }else{
                                    echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="4">No Item Added</td></tr>';
                                }
                                ?>
                                <tr></tr>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td >Grand Total :</td>
                                    
                                    <td></td>
                                    <td></td>
                                    <td>$<?php echo $grand_total; ?>/-</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                    </div>
                </div>  
            </div>
        </div>



        <!-- contact section ends -->

    <?php }
    else{
        header('location:index.php?p=products');

    } 
}else{
    header('location:index.php?p=products');

}?>
