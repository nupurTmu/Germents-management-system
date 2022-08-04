<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

<?php if(isset($_GET['order_id'])){
   $order_no =$_GET['order_id'];
}?>

<?php
  if(isset($_POST['payment_status_btn'])){
     $payment_status = $_POST['payment_status'];

     $update = "UPDATE tbl_order SET payment_status='$payment_status' WHERE random_order_id='$order_no'";
     $run = mysqli_query($con,$update);
     if($run){
      echo "<script>alert('payment success')</script>";
      echo "<script> window.location='order_liset.php' </script>";
     }
  }

?>
 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
            <div class="row d-flex justify-content-center py-5">
              <div class="col-lg-5">
                 
                <form action="" method="POST">
                  <div class="card">
                     <h4 class="text-center py-2">Payment Status</h4>
                    <div class="card-body border-top">
                    <?php
                      $select ="SELECT * FROM tbl_order WHERE random_order_id='$order_no'";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                        <div class=" border-bottom pb-2">
                          <strong>Order id:  <?php echo $order_no;?> &nbsp; &nbsp;  &nbsp; Transition No:  <?php echo $result['transtion_account_no'];?></strong>
                        </div>
                        <div class="row d-flex pt-3">
                          <div class="col-6 pt-2">
                             <strong>Total Amount: <?php echo $result['total_price'];?></strong>
                          </div>
                          <div class="col-6 pt-1">
                             <select name="payment_status" class=" form-control ">
                               <option value="1">Select Status</option>
                               <option value="2">Payment receved</option>
                               <option value="3">Invalid Transition Number</option>
                             </select>
                          </div>
                        </div>
                        <div class="py-2 pt-4 d-flex ">
                          <button class=" btn btn-success justify-content-end " name="payment_status_btn">Submit</button>
                        </div>
                    <?php  }  ?>
                    </div>
                  </div>
                  </form>
              </div>
            
         </div>
    </div>
</main>
<?php 
  require_once('footer.php');

?>
    