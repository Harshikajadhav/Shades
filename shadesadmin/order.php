<?php include 'connection.php';


$query = "
  SELECT 
    o.order_id,
    o.order_number,
    o.user_id,
    s.shipping_name,
    s.shipping_address,
    o.order_total_payment
  FROM
    orders o
    JOIN shipping_deails s ON o.order_id = s.order_id
";

$result = mysqli_query($conn, $query);


?>


<section class="section">
<div class="row">
  <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Orders</h5>



        

<?php

if (mysqli_num_rows($result) > 0) {
   ?>
    <table class="table datatable">
    <thead>
        <tr>
        <th scope="col">Order ID</th>
              
              <th scope="col">Order Number</th>
              <th scope="col">Shipping Name</th>
              <th scope="col">Total Payment</th>
              <th scope="col1">More Details</th>
        </tr>
    </thead>

<?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
        

        <tr>                  
        <td><?php echo $row['order_id'] ?></td>
                              <td><?php echo $row['order_number'] ?></td>
                              <td><?php echo $row['shipping_name'] ?></td>
                              <td><?php echo $row['order_total_payment'] ?></td>
                              <td>
                                        <a href="index.php?ap=details&order_number=<?php echo $row['order_number']; ?>">Details</a>
                                    </td>
        </tr>


    <?php
    }
?>
</table>
<?php
    mysqli_free_result($result);
} else {

    echo "Error executing the query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
      </div>
    </div>
  </div>
</div>
</section>

