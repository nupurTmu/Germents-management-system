<?php 

  require_once('header.php');
?>
  <section class="pt-3 ">
      <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Product" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
            </div>
          </div>
          <div class="col-lg-2"></div>
      </div>
  </section>
   <!-- ====================item-section start================ -->
  <section class="py-3 ">
      <div class="row">
             <div class="col-lg-8">
                 <div class="content_sec">
                 <?php
                    if(isset($_GET['product_id'])){
                        $product_id = $_GET['product_id'];
                        $select = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
                        $run = mysqli_query($con,$select);
                        while($result = mysqli_fetch_array($run)){ ?>
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="content_sec_img">
                               <img src="./admin/picture/<?php echo $result['product_imgae']?>" alt="">
                             </div>
                         </div>
                       
                          <div class="col-lg-6">
                          <form action="payment.php" method="POST">
                             <h2 class="mb-3 mt-2"><?php echo $result['product_name']?></h2>
                             <h4 class="mb-3">Price: <?php echo $result['product_price']?></h4>
                                <div>
                                    <div class="w-50 mb-3">
                                        <h5>Select Color</h5> 
                                        <select name="color_name"  class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="White">White</option>
                                            <option value="Black">Black</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Blue">Blue</option>
                                        </select>
                                     </div>
                               
                                    <div class="w-50 mb-3">
                                        <h5>Quantity </h5> 
                                        <input type="number" name="quantity" class="form-control">
                                        <input type="hidden" name="product_id" value="<?php echo $product_id?>">
                                   </div>
                                </div>
                                <input type="submit" name="submit_btn" class="btn btn-outline-success" value="Order Now">
                                </form>
                         </div>
                     </div>
              
           </div>
          <div class="row py-4">
                <div class="col-lg-12">
                     <div class="prodeu_desc">
                         <div class="des_title">
                            <h4>Product   Description</h4>
                         </div>
                         <div class="des_body">
                            <p><?php echo $result['product_description']?> </p></div>
                     </div>
                 </div>
                </div>
                <?php   }  }   ?>
             </div> 
              <div class="col-lg-4">
                <div class="category_side">
                <div class="card">
                  <div class="card-body">
                   <h3 class="text-center"> Product list</h3>
                  </div>
                  <ul class="list-group list-group-flush">
                    <?php
                      $select = "SELECT * FROM tbl_product WHERE product_type='New'";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ 
                      ?>
                      <li class="list-group-item"> <a class="card_category" href=""> <i class="fas fa-angle-double-right"></i> &nbsp;<?php echo $result['product_name']?></a></li>
                    <?php }?>
                  </ul>
              </div>
                </div>
              </div>
      </div>
  </section>


<?php 
 require_once('footer.php');
?>
    