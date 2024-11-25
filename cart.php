<?php
$session_id=session_id();
if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    ?>

    <?php
}



if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:index.php?p=cart');
}



if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM cart") or die('query failed');
    header('location:index.php?p=cart');
}



?>

    <style>
    form input{
        width: 15%;
        height: 30px;
        margin: 10px 0;
        padding: 0 10px;
        border: 1px solid #ccc;
    }


</style>


    <!--------------- Cart Items Details-------------------->
    <div class="small-container cart-page" >
        <table>
            <tr>
                <th>&emsp;Image</th>
                <th>&emsp;Name</th>
                <th>&emsp;Price</th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Quantity</th>
                <th>Total Price</th>
                <th>Action&emsp;&emsp;</th>
            </tr>
            <tbody>
                <?php
                $grand_total = 0;
                $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where sessionid = '$session_id' AND order_id IS NULL ") or die('query failed');
                if(mysqli_num_rows($cart_query) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                        ?>


                        <tr>
                            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                            <td><?php echo $fetch_cart['name']; ?></td>
                            <td>$<?php echo $fetch_cart['price']; ?>/-</td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                    &emsp;&emsp;<input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>" size="50">&emsp;
                                    <input type="submit" name="update_cart" value="Update" class="btn">
                                    <!-- <button type="submit" name="update_cart" class="btn">Update</button> -->

                                </form>
                            </td>
                            <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
                            <td><a href="index.php?p=cart&remove=<?php echo $fetch_cart['id']; ?>" class="btn" onclick="return confirm('Remove item from cart?');">Remove</a></td>

                        </tr>
                        <?php
                        $grand_total += $sub_total;
                    }
                }else{
                    echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="4">No Item Added</td></tr>';
                }
                ?>
                </tbody>
            </table>
            <hr>
            <?php
            if(mysqli_num_rows($cart_query) > 0){
            ?>
            <table>
                <tbody>
                <tr class="table-bottom">
                    <td colspan="4">Grand Total :</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <td><?php echo $grand_total; ?>/-</td>
                    <td><a href="index.php?p=cart&delete_all" onclick="return confirm('Delete all from cart?');" class="btn">Delete All</a></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="col-2">
            <a href="index.php?p=checkout" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Proceed to Checkout</a>
        </div>
    <?php } ?>

    </div>
    