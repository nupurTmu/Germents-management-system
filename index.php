<?php 
  require_once('header.php');
?>

  <div class="main_content mt-2">
    <div class="container-flud">
      <div class="row">
          <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="picture/nu1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/nu2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/nu3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/nu4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/pic3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/nu5.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <div class="col-md-4">
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
    </div>
  </div>
   <!-- ====================item-section start================ -->
  <section class="py-3">
      <div class="row">
        <div class="col-lg-12">
            <div class="recent_product">
                <h2>NEW PRODUCT</h2>
            </div>
        </div>
      </div>
      <div class="row">
        <?php
           $select = "SELECT * FROM tbl_product WHERE product_type='New'";
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
      <div class="row">
        <div class="col-lg-12">
            <div class="recent_product">
                <h2>FUTURE PRODUCT</h2>
            </div>
        </div>
      </div>
      <div class="row">
      <?php
           $select = "SELECT * FROM tbl_product WHERE product_type='Future'";
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
        
      </div>

  </section>


<?php 
 require_once('footer.php');
?>
    