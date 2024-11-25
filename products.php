

    <style>
        p.outset {border-style: outset;}
        form input{
    width: 20%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}
    </style>
    <?php
    include 'connection.php';
    /* session_start();

    
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header('location:index.php');
    };

    if(isset($_GET['logout'])){
        unset($user_id);
        session_destroy();
        header('location:index.php');
    };

    if(isset($_POST['add_to_cart'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

        if(mysqli_num_rows($select_cart) > 0){
            ?>
                <script type="text/javascript">
                        alert("Product already added to cart!");
                    </script>
    <?php
        }else{
            mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
            ?>
                <script type="text/javascript">
                    alert("Product added to cart!");
                </script>
            <?php 
        } 

    }
    
    
    
    */ ?>
   
    
           <!--    
    <hr style="height:2px; margin-left:30em; margin-right:30em; border-width:0;color:gray;background-color:gray "><br> -->
    <!--
<div class="coontainer">
                        <div class="user-profile">

                                    <?php /*
                                        $select_user = mysqli_query($conn, "SELECT * FROM `registration` WHERE id = '$user_id'") or die('query failed');
                                        if(mysqli_num_rows($select_user) > 0){
                                            $fetch_user = mysqli_fetch_assoc($select_user);
                                        }; */
                                    ?>
                                    
                                    <p>Username: <span><?php /* echo $fetch_user['username'];  ?></span></p>
                                    <p>Email: <span><?php  echo $fetch_user['email'];  ?></span></p>
                                                            <div class="flex">
                                                                <a href="index.php?p=account" class="btn">login</a>&emsp;
                                                                <a href="index.php?p=account" class="btn">register</a>&emsp;
                                                                <a href="products.php?logout=<?php echo $user_id; */ ?>" onclick="return confirm('Are you sure want to logout?');" class="btn">logout</a>
                                                            </div>
                        </div> 
</div>
        <hr style="height:2px; margin-left:30em; margin-right:30em; border-width:0;color:gray;background-color:gray "><br>
                                    -->





        <!----------- featured products--------------->
        <div class="small-container">
                    <div class="row row-2">
                        <h2>All Products</h2>
                        <select>
                            <option>Default Sorting</option>
                            <option>Sort by Price</option>
                            <option>Sort by popular</option>
                            <option>Sort by rating</option>
                            <option>Sort by sale</option>
                        </select>
                    </div>
        



<div class="row">
        <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
        ?>
        <form method="post" class="col-4" action="">
            <a href="index.php?p=productsdetails&id=<?php echo $fetch_product['id']; ?>"><img src="images/<?php echo $fetch_product['imageA']; ?>"></a>
            <div class="name"><?php echo $fetch_product['name']; ?></div>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <!-- <input type="number" min="1" name="product_quantity" value="1">&emsp; -->
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['imageA']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <!--<input type="submit" value="Add to cart" name="add_to_cart" class="pbtn"> -->
            </form> 
        <?php
                };
            };
        ?>
            </div>  <!-- div box-container finish -->
        </div> <!-- div products finish -->

                    
  