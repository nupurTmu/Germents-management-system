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
                    <th>Product Image </th>
                    <th>Quantity</th>
                    <th>Assign supervisor</th>
                    <th>Status</th>
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
                    <td>  <img style="width: 100px; height:50px;"  src="../admin/picture/<?php echo $result['product_imgae']?>" alt=""></td>
                    <td><?php echo $result['product_quantity']?></td>
                    <td> <a href="asign_production_super.php?order_id=<?php echo $result['order_id']?>" class="btn btn-success btn-sm" name="assign_btn"> Assign supervisor</a></td>
                    <td><?php if($result['status']=='0'){ ?>
                      
                    <h3 class="badge bg-primary" name="accept_btn">Accept</h3>
                    
                     <?php  }elseif($result['status']=='1'){ ?>

                    <button class="badge bg-warning " name="">Proccesing</button>
                   
                    <?php }elseif($result['status']=='2'){ ?>

                   <h4 class="badge bg-success " name="Proccesing_btn">Complete</h4>
                  <?php  } ?></td>
                 
                  </tr>
                  <?php } }  ?>
                </tbody>
              </table>
         </div>
    </div>
</main>
    <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>
    