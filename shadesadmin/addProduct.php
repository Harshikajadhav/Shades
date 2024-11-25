<?php
if(isset($_GET)){
    $msg=@$_GET['msg'];
} 
?>


<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Eye Glasses</h5>

              <!-- General Form Elements -->
              <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="title">
                  </div>

                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Product Type</label>
                  <div class="col-sm-10">
                    <select id="product_type" name="product_type" class="form-select" aria-label="Default select example">
                      
                      <option selected value="eyeglass">Eye Glass</option>
                    <option value="sunglass">Sun Glass</option>
                    <option value="lenses">Lenses</option>
                    </select>
                  </div>
                </div>

 
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Selling Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" id="sellingprice">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Main Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageA">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageB">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageC">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="imageD">
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
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Add Product" name="submit">
                    <!--<button type="submit" class="btn btn-primary">Submit Form</button>-->
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

