<?php 
  require_once('header.php');
?>
  <section class="pt-3">
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
  <section class="py-3">
      <div class="row">
        <div class="col-lg-12">
            <div class="recent_product">
                <h2>ALL PRODUCTS</h2>
            </div>
        </div>
      </div>
      <div class="row">
      <?php
           $select = "SELECT * FROM tbl_product";
           $run = mysqli_query($con,$select);
           while($result = mysqli_fetch_array($run)){ 
        ?>
        <div class="col-lg-3 py-3" >
        <div class="card_new">
                <div class="card-header-product">
                  <h5><?php echo $result['product_name']?></h5>
                </div>
                <div class="card-header-image">
                    <img src="./admin/picture/<?php echo $result['product_imgae']?>" alt="">
                </div>
                <div class="card-header-fotter ">
                  <div class="row ">
                    <div class="col-lg-7 pt-2">Price: <?php echo $result['product_price']?></div>
                    <div class="col-lg-5 pt-2">
                        <a href="oder_description.php?product_id=<?php echo $result['product_id']?>" class="btn btn-outline-light">Order Now</a>
                    </div>
                  </div>
                </div>
           </div>
        </div>
        <?php }?>
      </div>
  </section>


<?php 
 require_once('footer.php');
?>
    