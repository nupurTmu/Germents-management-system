<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <?php
                      if(isset($_POST['add_btn'])){
                        $product_name        = $_POST['product_name'];
                        $product_description = $_POST['product_description'];
                        $product_type        = $_POST['product_type'];
                        $product_price        = $_POST['product_price'];
                        $product_imgae = $_FILES['product_imgae']['name'];

                        move_uploaded_file($_FILES['product_imgae']['tmp_name'],"picture/$product_imgae");
  
                        $insert ="INSERT INTO tbl_product(product_name,product_description,product_type,product_price,product_imgae)
                        VALUES('$product_name','$product_description','$product_type','$product_price','$product_imgae')";
                        $run = mysqli_query($con,$insert);
                        if($run){
                            echo "<span class='text-success'>Data Insert Success</span>";
                        }else{
                            echo "<span class='text-danger'>Data Not Insert</span>"; 
                        }
                      }
                    ?>
                    <div class="container-fluid px-4 border">
                        <h4 class="mt-2">Add Product</h4>
                        <hr>
                        <form action="" method="post"  enctype="multipart/form-data">
                       <div class="row">
                            <div class="main_dibe d-flex">
                                    <div>
                                       <strong> Product Name</strong>
                                        <input type="text" name="product_name" class="form-control mt-1">
                                    </div>
                                    <div>
                                       <strong> Product Image</strong>
                                        <input type="file" name="product_imgae" class="form-control mt-1">
                                    </div>
                                    </div>
                                    <div class="w-50">
                                       <strong> Product Description</strong>
                                        <textarea type="text" name="product_description" class="form-control mt-1 ">

                                        </textarea>
                                    </div>

                                    <div class="main_dibe d-flex">
                                    <div>
                                       <strong> Product Type</strong>
                                       <select name="product_type" class="form-control mt-1 ">
                                            <option value="Future">Future </option>
                                            <option value="New">New</option>
                                        </select>
                                    </div>
                         
                                    <div class="ml-2">
                                       <strong> Product Price</strong>
                                        <input type="number" name="product_price" class="form-control mt-1">
                                    </div>
                            </div>
                            <div class="my-5">
                                <input type="submit" name="add_btn" class=" btn btn-outline-success" value="Submit">
                            </div>
                        </div>
                        </form>
 
                    </div>
                </main>
                  <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>