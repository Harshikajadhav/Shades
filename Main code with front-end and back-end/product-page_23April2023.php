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

if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE name = '$product_name'");
    if(mysqli_num_rows($select_cart) > 0){
        ?>
        <script type="text/javascript">
                alert("Product Already Added to Cart");
            </script>
        <?php
    }else{
        $session_id=session_id();
        
                $insert_product = mysqli_query($conn, "INSERT INTO cart (name, price, image, quantity,sessionid) VALUES ('$product_name', '$product_price', '$product_image', '$product_quantity', '$session_id')");
                header('location:cart.php');
                ?>
                <!--<script type="text/javascript">
                        alert("Product Added to Cart");
                    </script>-->
                <?php
    }
    
}

 
if(isset($_GET['id'])){
    $id = $_GET['id'];    
}
/*
$select_product="select * from products where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result); */


$select_product="select * from products where id='$id'";
$result=mysqli_query($conn,$select_product);
?>
   

        <!-------- Single Product Details-------------->

            <br><br><br><br>

        <h1><center>Product Details</center></h1>

                            <?php 
                                        if(mysqli_num_rows($result) > 0){
                                            while($fetch_product = mysqli_fetch_assoc($result)){
                            ?>
    <div class="small-comtainer single-product">
            <div class="row">
                                <div class="col-2"><form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="images/<?php echo $fetch_product['imageA']; ?>" width="50%" id="ProductImg">

                                        <div class="small-img-row">
                                                <div class="small-img-col">
                                                    <img src="images/<?php echo $fetch_product['imageA']; ?>" width="70%" class="small-img">
                                                </div>
                                            <div class="small-img-col">
                                                <img src="images/<?php echo $fetch_product['imageB']; ?>" width="70%" class="small-img">
                                            </div>
                                                <div class="small-img-col">
                                                    <img src="images/<?php echo $fetch_product['imageC']; ?>" width="100%" class="small-img">
                                                </div>
                                            <div class="small-img-col">
                                                <img src="images/<?php echo $fetch_product['imageD']; ?>" width="100%" class="small-img">
                                            </div>
                                        </div>
                                </div>
                <div class="col-2">
                    <p>Home / Glasses</p>
                    <h1><?php echo $fetch_product['name']; ?></h1>
                    <h4>&#8377;<?php echo $fetch_product['price']; ?>/-</h4>                    
                    <input type="number" value="1">



                    <!-- HIDDEN INPUT FIELDS -->
                    
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['imageA']; ?>">

        <?php
                        };
                    };
        ?>
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                    <h3>Product Details</h3>
                    <p>
                        Flexible frame with unbreakable glasses, with 2 month warranty
                        </p>
                </div>
            </div>
    </div><br><br><br><br><br>
</form>


                    <!------------ js for product gallery ----------------->
 <script>
     var ProductImg = document.getElementById("ProductImg");
     var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
            {
            ProductImg.src = SmallImg[0].src;
            }


            SmallImg[1].onclick = function()
            {
            ProductImg.src = SmallImg[1].src;
            }

            SmallImg[2].onclick = function()
            {
            ProductImg.src = SmallImg[2].src;
            }

            SmallImg[3].onclick = function()
            {
            ProductImg.src = SmallImg[3].src;
            }
 </script>
