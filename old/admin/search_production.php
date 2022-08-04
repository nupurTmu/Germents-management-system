<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">All Production Report </h4>
                        <div class="row ">
                          <div class="card">
                            <div class="card-body">
                               <div class="col-lg-12">
                                 <div class="row">
                                   <div class="col-lg-6">
                                       <a href="production_list.php" class="btn btn-success">Back</a>
                                   </div>
                                 </div>
                         
                               </div>
                            
                               <div class="container_print">
                               <h5 class="text-center">Total Production:( 
                                <?php
                                   if(isset($_POST['search'])){
                                       $teget_date = $_POST['teget_date'];
                                       $current_date =$_POST['current_date'];

                                    $selct_production = "SELECT SUM(qty) AS sum from tbl_production WHERE date  BETWEEN '$teget_date' AND '$current_date'";
                                    $run = mysqli_query($con,$selct_production);
                                    if($run){
                                    while($res = mysqli_fetch_array($run)){ 
                                        echo $res['sum'];
                                        } } }
                                    ?>
                                    Pcs )</h5>
                                <table class="table table-striped " id="datatablesSimple">
                                <thead>
                                   <tr>
                                      <th scope="col">Sl.No</th>
                                      <th scope="col">Worker Name</th>
                                      <th scope="col">Category Name</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Date</th>
                                   </tr>
                                </thead>
                              <tbody>
                             
                              <?php 
                                  $selct_production=" SELECT * FROM `tbl_production` 
                                  INNER JOIN tbl_prodction_officer ON tbl_production.production_id = tbl_prodction_officer.id
                                  INNER JOIN tbl_worker on tbl_production.workere_id = tbl_worker.id
                                  INNER JOIN tbl_category ON tbl_production.category_id = tbl_category.cat_id 
                                  WHERE date  BETWEEN '$teget_date' AND '$current_date'"; 
                                   $run = mysqli_query($con,$selct_production);
                                   if($run){
                                      $count ="1";
                                   while($res = mysqli_fetch_array($run)){  ?>
                                     <tr>
                                      <th scope="row"><?php echo $count++; ?></th>
                                      <td><?php  echo $res['worker_name'];?></td>
                                      <td><?php  echo $res['category_name'];?></td>
                                      <td><?php  echo $res['qty'];?> Pcs</td>
                                      <td><?php  echo $res['date'];?></td>
                                   </tr>
                                <?php 
                                  } } 
                                ?>
                          </tbody>
                    </table>  
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" id="print">Print</button>
                    </div>
                 </div>


            </div>
         </div>
                  

    </div>
</div>
</main>
            <!--  -------------- Main content End---------------------------------------->

 <script src="js/jquery.min.js"></script>
      <script src="js/printThis.js"></script>
      <script>
      $('#print').click(function(){
        $('.container_print').printThis();
      })
      </script>           
<?php 
  require_once('footer.php');

?>