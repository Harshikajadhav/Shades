<?php
include "connection.php";
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

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


//End of Image Code
$sql="update products set name='$name', price='$price', imageA='$file_nameA', imageB='$file_nameB', imageC='$file_nameC', imageD='$file_nameD' where id=$id";
$update=mysqli_query($conn, $sql);
if($update){
    header("Location:index.php?ap=listProducts"); 
    ?>
    <script type="text/javascript">
        alert("Product Updated Successfully");
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Please Try Again");
    </script>
    <?php
}    
}
?>