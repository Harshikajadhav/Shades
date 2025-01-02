<?php
include 'connection.php';

if (isset($_GET['order_number'])) {
  $orderNumber = $_GET['order_number'];

  // Fetch user details and order details based on the order number
  $query = "
    SELECT 
      o.order_number,
      s.shipping_name,
      s.shipping_address,
      o.order_total_payment,
      o.order_status
    FROM
      orders o
      JOIN shipping_deails s ON o.order_id = s.order_id
    WHERE
      o.order_number = '$orderNumber'
  ";

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Display the user details and order details
    echo "<h2>Order Details</h2><br>";
    echo "<p>Order Number: {$row['order_number']}</p>";
    echo "<p>Shipping Name: {$row['shipping_name']}</p>";
    echo "<p>Shipping Address: {$row['shipping_address']}</p>";
    echo "<p>Total Payment: {$row['order_total_payment']}</p>";
    ?>

    <form action="update_order_status.php" method="POST">
      <input type="hidden" name="order_number" value="<?php echo $row['order_number']; ?>">
      <label for="order_status">Order Status:</label>
      <select name="order_status" id="order_status">
        <option value="pending" <?php if ($row['order_status'] === 'pending') echo 'selected'; ?>>Pending</option>
        <option value="dispatched" <?php if ($row['order_status'] === 'dispatched') echo 'selected'; ?>>Dispatched</option>
      </select>&emsp;
      <button type="submit" name="update_order_status" class="btn btn-primary">Update</button>
    </form>
    <?php
  } else {
    echo "Order not found.";
  }
} else {
  echo "Invalid request.";
}
?>
<br>
<a href="index.php?ap=order" class="btn btn-primary">Go Back</a></p>
