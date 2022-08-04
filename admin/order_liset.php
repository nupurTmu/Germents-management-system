<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->
<?php
  if(isset($_POST['accept_btn'])){
     $order_id = $_POST['order_id'];
     $updae ="UPDATE tbl_order SET status='1' WHERE order_id='$order_id'";
     $run = mysqli_query($con,$updae);

  }
  if(isset($_POST['Proccesing_btn'])){
    $order_id = $_POST['order_id'];
    $updae ="UPDATE tbl_order SET status='2' WHERE order_id='$order_id'";
    $run = mysqli_query($con,$updae);

 }
 if(isset($_POST['cencel_btn'])){
  $order_id = $_POST['order_id'];
  $delete = "DELETE FROM tbl_order WHERE order_id = '$order_id' ";
  $run = mysqli_query($con,$delete);
  if($run){
    echo "<script>window.alert('Order Cancel Successfull')</script>";
  }


 }
?>


 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
            <h1 class="mt-4">Order List</h1>
            <div class="row ">
           
              <table class="table table-hover border ">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Buyer Name </th>
                    <th>Company Name </th>
                    <th>Phone</th>
                    <th>Product Name </th>
                    <th>Product color</th>
                    <th>Product Image </th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  $select = "SELECT * FROM `tbl_order`
                        INNER JOIN tbl_buyer_regi ON tbl_order.buyer_id = tbl_buyer_regi.buyer_id
                        INNER JOIN tbl_product ON tbl_order.product_id = tbl_product.product_id ORDER BY tbl_order.order_id  DESC ";
                        $run = mysqli_query($con,$select);
                        while($result = mysqli_fetch_array($run)){
                          if($result['status']=='2'){
                            
                       }else{ ?>
                  <tr>
                    <td><?php echo $count++;?></td>
                    <td><?php echo $result['buyer_name']?></td>
                    <td><?php echo $result['buyer_company']?></td>
                    <td><?php echo $result['buyer_phone']?></td>
                    <td><?php echo $result['product_name']?></td>
                    <td><?php echo $result['product_color']?></td>
                    <td>  <img style="width: 100px; height:50px;" src="picture/<?php echo $result['product_imgae']?>" alt=""></td>
                    <td><?php echo $result['product_quantity']?></td>
                    <td><?php echo $result['date']?></td>
                    <td><?php if($result['status']=='0'){ ?>
                        <form action="" method="POST">
                         <input type="hidden" name="order_id" value="<?php echo $result['order_id']?>">
                          <button class="btn btn-primary btn-sm" name="accept_btn">Accept</button>
                        </form>
                     <?php  }elseif($result['status']=='1'){ ?>
                        <form action="" method="POST">
                           <input type="hidden" name="order_id" value="<?php echo $result['order_id']?>">
                            <button class="btn btn-warning btn-sm" name="Proccesing_btn">Proccesing</button>
                          </form>
                     <?php }elseif($result['status']=='2'){ ?>
                        <button class="btn btn-success btn-sm" name="Proccesing_btn">Complete</button>
                  <?php  } ?>
                  <?php if($result['status']=='0'){ ?>
                    <form action="" method="POST">
                      <input type="hidden" name="order_id" value="<?php echo $result['order_id']?>">
                      <button class="btn btn-danger btn-sm" name="cencel_btn">Cancel</button>
                    </form>
                    <?php }?>
                </td>
                   <td> <?php if($result['payment_status']=='0'){ ?>
                     <strong class=""> Not payment</strong>
                    <?php }elseif($result['payment_status']=='2'){ ?>
                      <strong>payment recived</strong>
                  <?php }else{ ?>
                    <a href="payment_page.php?order_id=<?php echo $result['random_order_id']?> " class="btn btn-sm btn-success">Payment check</a></td>
                    </td>
                    <?php }?>
                  </tr>

                  <?php } }  ?>
                </tbody>
              </table>
         </div>
    </div>
</main>



<?php 
  require_once('footer.php');

?>
    