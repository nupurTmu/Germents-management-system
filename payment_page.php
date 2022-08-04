<?php 
  require_once('header.php');
  



  if(isset($_GET['order_no'])){
     $order_no =$_GET['order_no'];
   ?>
   
    <div class="row d-flex justify-content-center py-5">
     
       <div class="col-lg-4">
           <form action="" method="POST">
          <div class="card">
             <h5 class="text-center py-4">Payment Now</h5>
            <div class="card-body border-top">
              <div class="row py-2">
                   <div class="col-lg-6 text-success">
                   <input type="hidden" name="order_no" value="<?php echo $order_no;?>">
                     <strong>Order No : <?php echo $order_no;?></strong>
                    
                   </div>
                   <div class="col-lg-6 text-danger">
                     <strong>Total Amount: <?php
                      
                      $select ="SELECT * FROM tbl_order WHERE random_order_id='$order_no'";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){
                        echo $total_taka =  $result['total_price'];
                         $payment_status =  $result['payment_status'];
                         $transtion_account_no =  $result['transtion_account_no'];
                      }

                      if(isset($_POST['payment_btn'])){
                        $order_no = $_POST['order_no'];
                        $payment_aount = $_POST['payment_aount'];
                        $getmethod = $_POST['getmethod'];
                        $transtion_account_no = $_POST['transtion_account_no'];

                        if($total_taka==$payment_aount){

                          $update ="UPDATE tbl_order SET payment_aount='$payment_aount', payment_status='1', getmethod='$getmethod',transtion_account_no='$transtion_account_no' WHERE random_order_id='$order_no'";
                          $run = mysqli_query($con,$update);
                    
                          if($run){
                            echo "<script>alert('payment success')</script>";
                            echo "<script> window.location='order_details.php' </script>";
                          }
                        }else{
                      
                          echo "<script>alert('payment amount and total amount not same. Please try again !!')</script>";
                        }
                       }
                      ?></strong>
                   </div>
              </div>

              <div class="row border-top py-2">
                   <div class="col-lg-6">
                     <label> Pay Amount</label>
                     <input type="text" class=" form-control" name="payment_aount">
                   </div>
                   <div class="col-lg-6">
                     <label for=""> Payment method</label>
                      <select name="getmethod" class="form-control">
                        <option value="">select menu</option>
                        <option value="Bkash">Bkash</option>
                        <option value="DBBL">DBBL</option>
                        <option value="Bank Account">Bank Account</option>
                      </select>
                   </div>
                   <div class="col-lg-12 pt-2">
                      <label for="">Transition/Account no</label>
                      <input type="text" class="form-control" name="transtion_account_no">
                   </div>
                   <div class="py-4">
                     <button class="btn btn-sm btn-success" name="payment_btn">Submit</button>
                   </div>
              </div>
             
            </div>
          </div>
          </form>
       </div>
       <div class="col-lg-3">
            <div class="card">
                <h5 class="card-title py-4 text-center"> Payment Status</h5>
                <div class="card-body border-top">
                  <?php
                    if($payment_status=='0'){ ?>

                        <strong class="text-danger">Not payment</strong> <br>

                  <?php  }elseif($payment_status=='1'){ ?>
                    <strong class="text-primary">Payment Proccesing. Please wait a few minutes.</strong> 
                   
                 <?php }elseif($payment_status=='2'){ ?>

                     <strong>Order no: <?php echo $order_no;?> &nbsp; &nbsp; &nbsp;&nbsp; 
                     <br>Transition no: <?php echo  $transtion_account_no;?> </strong>
                     <div class="border-top py-2" >
                         <strong class="text-success">Payment Success</strong> <br>
                     </div>
                   <?php  }elseif($payment_status=='3'){ ?>
                    
                    <strong>Order no: <?php echo $order_no;?> &nbsp; &nbsp; &nbsp;&nbsp; 
                     <br>Transition no: <?php echo  $transtion_account_no;?> </strong> <br>
                       <strong class="text-danger">Payment not success. Invalid Transition Number !!</strong>
                   <?php }  ?>
                </div>
            </div>
        </div>
    </div>

 <?php } ?>
<?php 
 require_once('footer.php');
?>
    