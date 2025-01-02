<?php
include "connection.php";
include 'header1.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];    
}

$sql="select * from products where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>




<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Eye Glasses</h5>

              <!-- General Form Elements -->
              <form action="update1.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="text" class="form-control" name="name" id="title" value="<?php echo $row['name']; ?>">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" id="sellingprice" value="<?php echo $row['price']; ?>">
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Main Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageA" value="<?php echo $row['imageA'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageB" value="<?php echo $row['imageB'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageC" value="<?php echo $row['imageC'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageD" value="<?php echo $row['imageD'] ?>">
                  </div>
                </div>

                <!--
                <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color </label>
                  <div class="col-sm-10">
                    <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div> -->
             

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Update Button</label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Update Product" name="update">
                    <!--<button type="submit" class="btn btn-primary">Submit Form</button>-->
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

