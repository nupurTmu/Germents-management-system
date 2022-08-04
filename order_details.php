<?php 
  require_once('header.php');

  if(!isset($_SESSION['username_buyer'])){
    header("location:buyer_log_register.php");
    }else{
    $username = $_SESSION['username_buyer'];
    $select= "SELECT * FROM tbl_buyer_regi WHERE buyer_name='$username'  limit 1";
    $run = mysqli_query($con,$select);
    while($rows = mysqli_fetch_array($run)){
   $buyer_id =  $rows['buyer_id'];
     
   }   } 

   if(isset($_POST['cancel_btn'])){
     $order_id =  $_POST['order_id'];

     $delete = "DELETE FROM tbl_order WHERE order_id = '$order_id' ";
     $run = mysqli_query($con,$delete);
     if($run){
       echo "<script>window.alert('Order Cancel Successfull')</script>";
     }

   }

  if(isset($_GET['order_no'])){
     $order_no =$_GET['order_no'];
   ?>
    <div class="row d-flex justify-content-lg-center py-5">
       <div class="col-lg-4">
          <div class="card">
             <h5 class="text-center py-4 ">Payment Status</h5>
            <div class="card-body border-top">
              <div>
                <strong>Order No : <?php echo $order_no;?></strong>
              </div>
              <div class="row border-top py-2">
                   <div class="col-lg-6 text-success">
                     <strong>Total Amount: 10000</strong>
                   </div>
                   <div class="col-lg-6 text-danger">
                     <strong>Due Amount: 10000</strong>
                   </div>
              </div>

              <div class="row border-top py-2">
                   <div class="col-lg-6">
                     <label for=""> Pay Amount</label>
                     <input type="number" class=" form-control" name="payment_aount">
                   </div>
                   <div class="col-lg-6 text-danger">
                      <label for=""> Current Due</label>
                      <input type="number" class=" form-control" name="current_due" readonly>
                   </div>
                   <div class="col-lg-6 pt-2">
                     <label for=""> Payment Getway</label>
                      <select name="" class="form-control">
                        <option value="">select menu</option>
                        <option value="Bkash">Bkash</option>
                        <option value="DBBL">DBBL</option>
                        <option value="Bank Account">Bank Account</option>
                      </select>
                   </div>
                   <div class="col-lg-6 pt-2">
                      <label for="">Transition/Account no</label>
                      <input type="text" class="form-control" name="transtion_account_no">
                   </div>

                   <div class="py-4">
                     <button class="btn btn-sm btn-success">Submit</button>
                   </div>
              </div>
             
            </div>
          </div>
       </div>
    </div>


 <?php } ?>

   <!-- ====================item-section start================ -->
  <section class="py-5 px-4 hidden_div">
      <div class="row">
        <div class="col-lg-12">
            <div class="recent_product">
                <h2>All Order List</h2>
            </div>
        </div>
      </div>
      <div class="row">
              <table class="table table-hover border">
                <thead>
                  <tr>
                    <th>Order no</th>
                    <th>Buyer Name </th>
                    <th>Product Name </th>
                    <th>Product Color </th>
                    <th>Product Image </th>
                    <th>Taka</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Payment status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  $select = "SELECT * FROM `tbl_order`
                        INNER JOIN tbl_buyer_regi ON tbl_order.buyer_id = tbl_buyer_regi.buyer_id
                        INNER JOIN tbl_product ON tbl_order.product_id = tbl_product.product_id
                        WHERE tbl_order.buyer_id ='$buyer_id' ORDER BY tbl_order.order_id  DESC ";
                  $run = mysqli_query($con,$select);
                  while($result = mysqli_fetch_array($run)){  ?>
                       
                  <tr>
                    <td><?php echo $result['random_order_id']?></td>
                    <td><?php echo $result['buyer_name']?></td>
                    <td><?php echo $result['product_name']?></td>
                    <td><?php echo $result['product_color']?></td>
                    <td>  <img style="width: 100px; height:50px;" src="./admin/picture/<?php echo $result['product_imgae']?>" alt=""></td>
                    <td><?php echo $result['total_price']?></td>
                    <td><?php echo $result['date']?></td>
                    <td><?php if($result['status']=='0'){
                         echo"<h6 class=' text-primary'>Order submitted</h6>";
                       }elseif($result['status']=='1'){
                        echo"<h6 class=' text-warning '>Proccesing</h6>";
                      
                      }elseif($result['status']=='2'){
                        echo"<h4 class='text-success'>Complete</h4>";
                       
                    } ?>
                     <?php
                       if($result['status']=='0'){ ?>
                       <form action="" method="POST">
                         <input type="hidden" name="order_id" value="<?php echo $result['order_id']?>">
                         <button class="btn btn-danger btn-sm" name="cancel_btn">cancel</button>
                       </form>
                       <?php }  ?>
                    </td>

                     <td>
                        <?php if($result['payment_status']=='0' OR $result['payment_status']=='3'){ ?>
                          <a href="payment_page.php?order_no=<?php echo $result['random_order_id']?>" class="btn btn-primary btn-sm">Payment now</a>
                        <?php }elseif($result['payment_status']=='1'){ ?>
                          <a href="payment_page.php?order_no=<?php echo $result['random_order_id']?>" class="btn btn-warning btn-sm">Payment Proccesing</a>
                       <?php }elseif($result['payment_status']=='2'){ ?>
                        <a href="payment_page.php?order_no=<?php echo $result['random_order_id']?>" class="btn btn-success btn-sm">Payment success</a>
                     <?php  }?>
                       
                
                    </td>
                
                    </tr>
                  <?php }   ?>
                </tbody>
              </table>
      </div>
  </section>


<?php 
 require_once('footer.php');
?>
    