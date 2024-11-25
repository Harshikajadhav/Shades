<?php include 'connection.php';
$sql="select * from products";
$select=mysqli_query($conn,$sql); ?>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Glasses</h5>
              <p> <a href="index.php?ap=addProduct" class="btn btn-primary">Add Product</a></p>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <!-- <th scope="col">Color</th> -->
                    <th scope="col">Image 1</th>
                    <th scope="col">Image 2</th>
                    <th scope="col">Image 3</th>
                    <th scope="col">Image 4</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                  <?php
                            if(mysqli_num_rows($select)>0){
                            while($row=mysqli_fetch_assoc($select)){
                    ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo $row['imageA'] ?></td>
                                    <td><?php echo $row['imageB'] ?></td>
                                    <td><?php echo $row['imageC'] ?></td>
                                    <td><?php echo $row['imageD'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                    <?php            
                            }
                        }
                  ?>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>