<!DOCTYPR html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>All Products - Shades</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
</head>
<?php include 'connection.php'; 
?>
    <body>

        <!-------- Single Product Details-------------->

            <br><br><br><br>

        <h1><center>Product Details</center></h1>

        <?php 
                    $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                    if(mysqli_num_rows($select_product) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_product)){
        ?>
        <div class="small-comtainer single-product">
            <div class="row">
                <div class="col-2">
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="images/<?php echo $fetch_product['imageA']; ?>" width="50%" id="ProductImg">

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/<?php echo $fetch_product['imageA']; ?>" width="70%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/<?php echo $fetch_product['imageB']; ?>" width="70%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/<?php echo $fetch_product['imagec']; ?>" width="100%" class="small-img">
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
                    <a href="" class="btn">Add to Cart</a>
                    <h3>Product Details</h3>
                    <p>
                        Flexible frame with unbreakable glasses, with 2 month warranty
                        </p>
                </div>
            </div>
        </div>
        <?php
                        };
                    };
        ?>
    



        <!----------- Title ----------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>
            </div>
        </div>






            <!----------- featured products--------------->
                <div class="small-container">
                    <div class="row row-2">
                    </div>
                    <div class="row">





                        <!------- Product 1--------------->
                        <div class="col-4">
                            <img src="images/product-1.jpg">
                            <h4>Navy Blue</h4>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <p>$50.0</p>
                        </div>

                        <!--------Product 2--------->

                        <div class="col-4">
                            <img src="images/product-2.jpg">
                            <h4>Black Eyewear</h4>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <p>$50.0</p>
                        </div>



                        <!--------Product 3--------->

                        <div class="col-4">
                            <img src="images/product-3.jpg">
                            <h4>Vincent Chase</h4>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>$50.0</p>
                        </div>



                        <!--------Product 4--------->

                        <div class="col-4">
                            <img src="images/product-4.jpg">
                            <h4>John Jacobs</h4>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>$50.0</p>
                        </div>                        
                    </div>
                </div>

                
                
                
                
                
                <!--------Footer---------->

<div class="footer">
    <div class="container">
        <div class="row">
            
            
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and IOS mobile Phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>

            <div class="footer-col-2">
                <img src="images/logo-white.png">
                <p>Our purpose is to sustainably make the pleasure and benefits of our brand to many.</p>
            </div>

            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Block Host</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>

                </ul>
            </div>

            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>

                </ul>
            </div>
        </div>
        <hr>
        <p class="project">Made by Aditi Mishra and Harshika Jadhav</p>
    </div>
</div>

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

    </body>
</html>