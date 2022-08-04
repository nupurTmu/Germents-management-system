<?php 
  require_once('header.php');
     if(isset($_POST['submit_btn'])){
      $quantity = $_POST['quantity'];
      $color_name = $_POST['color_name'];
      $product_id = $_POST['product_id'];

      
      $_SESSION['quantity'] = "$quantity";
      $_SESSION['product_id'] = "$product_id";
      $_SESSION['color_name'] = "$color_name";
  }

  if(!isset($_SESSION['username_buyer'])){
    header("location:buyer_log_register.php");
    }else{
    $username = $_SESSION['username_buyer'];
    $select= "SELECT * FROM tbl_buyer_regi WHERE buyer_name='$username'  limit 1";
    $run = mysqli_query($con,$select);
    while($rows = mysqli_fetch_array($run)){
   $buyer_id =  $rows['buyer_id'];
     
   }   } ?>

   <!-- ====================item-section start================ -->
  <section class="py-5 pb-5 mb-5 px-4">
      <div class="row">
        <div class="col-lg-12">
            <div class="recent_product">
                <h2>Order List</h2>
            </div>
        </div>
      </div>
      <div class="row">
              <table class="table table-hover border">
                <thead>
                  <tr>
                    <th>Product Name </th>
                    <th>Product Image </th>
                    <th>Product color </th>
                    <th>Product price </th>
                    <th>Total quantity</th>
                    <th>Total Taka</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $quantity = $_SESSION['quantity'];
                    $product_id = $_SESSION['product_id'];
                    $color_name = $_SESSION['color_name'];
                
                    $select = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
                    $run = mysqli_query($con,$select);
                    while($result = mysqli_fetch_array($run)){ 
                      $product_price =  $result['product_price'];
                      ?>
                    <tr>
                        <td><?php echo $result['product_name']?></td>
                        <td><img style="width:100px; height:100px;" src="./admin/picture/<?php echo $result['product_imgae']?>" alt=""></td>
                        <td><?php echo $color_name ?></td>
                        <td><?php echo $product_price ?></td>
                        <td><?php echo $quantity ?></td>
                        <td> <?php echo $total_taka =$product_price *  $quantity ; ?></td>
                        <form action="" method="POST">
                          <input type="hidden" name="product_id" value="<?php echo $product_id?>">
                          <input type="hidden" name="quantity" value="<?php echo $quantity?>">
                          <input type="hidden" name="product_price" value="<?php echo $product_price?>">
                          <input type="hidden" name="total_taka" value="<?php echo $total_taka?>">
                          <input type="hidden" name="color_name" value="<?php echo $color_name?>">
                          <td><button class="btn btn-outline-success" name="confirm_oredr">Confirm</button></td>
                        </form>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
      </div>
  </section>
    <?php
     
      $buyer_id;
      if(isset($_POST['confirm_oredr'])){
          $product_id = $_POST['product_id'];
          $quantity = $_POST['quantity'];
          $product_price = $_POST['product_price'];
          $total_taka = $_POST['total_taka'];
          $color_name = $_POST['color_name'];
          $today = date('Y-m-d');
          $order_number = rand(111111,000000);
        $insert = "INSERT INTO tbl_order(random_order_id,buyer_id,product_id,product_color,product_price,total_price,product_quantity,status,date)
          VALUES('$order_number','$buyer_id','$product_id','$color_name','$product_price','$total_taka','$quantity','0','$today')";
          $run = mysqli_query($con,$insert);
          if($run){
            echo "<script>window.location='order_details.php'</script>";
          }else{
            echo "data not insert";
          }
      }

    ?>

<?php 
 require_once('footer.php');
?>
    