<?php
include 'connection.php';

if (isset($_POST['update_order_status'])) {
  $orderNumber = $_POST['order_number'];
  $orderStatus = $_POST['order_status'];

  // Update the order status in the database
  $updateQuery = "
    UPDATE orders
    SET order_status = '$orderStatus'
    WHERE order_number = '$orderNumber'
  ";

  $updateResult = mysqli_query($conn, $updateQuery);
  if ($updateResult) {
    echo "<script>alert('Order status updated successfully.'); window.location.href = 'index.php?ap=order';</script>";
  } else {
    echo "<script>alert('Failed to update order status: " . mysqli_error($conn) . "'); window.location.href = 'index.php?ap=order';</script>";
  }
} else {
  echo "<script>alert('Invalid request.'); window.location.href = 'index.php?ap=order';</script>";
}
?>
