<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

            <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-2">Complete Order List</h1>
                    <div class="row">
                            
                    <table class="table table-hover border">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Buyer Name </th>
                            <th>Company Name </th>
                            <th>Phone</th>
                            <th>Product Name </th>
                            <th>Product Image </th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count = 1;
                        $select = "SELECT * FROM `tbl_order`
                                INNER JOIN tbl_buyer_regi ON tbl_order.buyer_id = tbl_buyer_regi.buyer_id
                                INNER JOIN tbl_product ON tbl_order.product_id = tbl_product.product_id
                                WHERE status ='2'
                                ORDER BY tbl_order.order_id  DESC ";
                        $run = mysqli_query($con,$select);
                        while($result = mysqli_fetch_array($run)){  ?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $result['buyer_name']?></td>
                            <td><?php echo $result['buyer_company']?></td>
                            <td><?php echo $result['buyer_phone']?></td>
                            <td><?php echo $result['product_name']?></td>
                            <td>  <img style="width: 100px; height:50px;" src="picture/<?php echo $result['product_imgae']?>" alt=""></td>
                            <td><?php echo $result['product_quantity']?></td>
                            <td><?php if($result['status']=='2'){
                                echo "Complete";
                            } ?>
                            </td>
                        </tr>

                        <?php }   ?>
                        </tbody>
                    </table>
                 </div>
            </div>
    </main>
    <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>
    