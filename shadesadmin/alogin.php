<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){

$name = $_POST['name'];
$pass = $_POST['pass'];

$s = "select * from adlogin where name = '$name' && pass = '$pass'";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.php');
}else{
    header('location:login.php');
}
}
?>