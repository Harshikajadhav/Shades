<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$sql="delete from products where id = $id";
$delete=mysqli_query($conn,$sql);

if($delete){
    header("Location:index.php?ap=listProducts");
    ?>
    <script type="text/javascript">
        alert("Product Deleted");
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Please Try Again");
    </script>
    <?php
}
?>