<?php
include "connection.php";


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_type = $_POST['product_type'];

    $file_nameA = $_FILES['imageA']['name'];
    $file_nameB = $_FILES['imageB']['name'];
    $file_nameC = $_FILES['imageC']['name'];
    $file_nameD = $_FILES['imageD']['name'];
    
    $file_sizeA = $_FILES['imageA']['size'];
    $file_sizeB = $_FILES['imageB']['size'];
    $file_sizeC = $_FILES['imageC']['size'];
    $file_sizeD = $_FILES['imageD']['size'];
    
    $file_tmpA = $_FILES['imageA']['tmp_name'];
    $file_tmpB = $_FILES['imageB']['tmp_name'];
    $file_tmpC = $_FILES['imageC']['tmp_name'];
    $file_tmpD = $_FILES['imageD']['tmp_name'];
    
    $file_typeA = $_FILES['imageA']['type'];
    $file_typeB = $_FILES['imageB']['type'];
    $file_typeC = $_FILES['imageC']['type'];
    $file_typeD = $_FILES['imageD']['type'];

    if(move_uploaded_file($file_tmpA,"upload/". $file_nameA)){
          ?>
        <script type="text/javascript">
            alert("Product Added Successfully");
        </script>
        <?php
    }
    else
    if(move_uploaded_file($file_tmpB,"upload/". $file_nameB)){
    }
    else
    if(move_uploaded_file($file_tmpC,"upload/". $file_nameC)){
    }
    else
    if(move_uploaded_file($file_tmpD,"upload/". $file_nameD)){
    }

    $sql = "INSERT INTO products (name, price, product_type, imageA, imageB, imageC, imageD) VALUES ('$name', '$price', '$product_type', '$file_nameA','$file_nameB','$file_nameC','$file_nameD')";
      $result = $conn->query($sql);
      if($result){
        header("Location:index.php?ap=listProducts"); 
        ?>
        <script type="text/javascript">
                alert("Product Added Successfully");
            </script>
            <?php
      }else{
        ?>
        <script type="text/javascript">
                alert("Product Not Added");
            </script>
            <?php
      }
    
    }






/*
 //Image Code
    $name = $_POST['name'];
    $price = $_POST['price'];
          
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if(move_uploaded_file($file_tmp,"upload/". $file_name)){
        echo "Successfully Uploaded.";
    }else{
        echo "Could not upload the file.";
    }
}
//End of Image Code
$sql="insert into products (name, price, image) values('$name', '$price', '$file_name')";
$insert=mysqli_query($conn, $sql);
if ($insert) {
    header("Location:index.php?ap=listProducts");
    ?>
    <script type="text/javascript">
        alert("Product Added Successfully");
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Please Try Again");
    </script>
    <?php
} */
?>