<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Production Report</h4>
                        <div class="row ">
                            <div class="card mb-2">
                                <div class="card-body">
                                   <form action="" method="POST">
                                       <div class="row">
                                    <div class="col-lg-4">
                                    <label class="card-title">Select Category</label>
                                    <select class="form-select" name="ctegory_id" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <?php 
                                            $selct_production = "select * from tbl_category";
                                            $run = mysqli_query($con,$selct_production);
                                            if($run){
                                            while($res = mysqli_fetch_array($run)){ ?>
                                            <option value="<?php echo $res['cat_id']?>"><?php echo $res['category_name']?></option>
                                        <?php } }  ?>
                                    </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="card-title">Date</label>
                                        <input type="date" class="form-control" name="to_date">
                                    </div>
                                    <div class="col-lg-4">
                                    <label class="card-title">Current Date</label>
                                        <input type="date" class="form-control" name="current_DATE">
                                    </div>
                                    </div>
                                     <div class=" py-2">
                                         <button class="btn btn-primary" name="submit">Search</button>
                                   </div>

                                    </form>
                                </div>
                            </div>

                <div class="container_print">
                            <?php if(isset($_POST['submit'])){
                                  $cate_id = $_POST['ctegory_id']; 
                                $current_date = $_POST['current_DATE'];
                                $to_date = $_POST['to_date'];
                                ?>
                               <div class="col-lg-12 bg-dark text-white text-center">
                               <h5>Total Production:
                                <?php
                                    $selct_production = "SELECT SUM(qty) AS sum from tbl_production WHERE date  BETWEEN '$to_date' AND '$current_date' AND tbl_production.category_id='$cate_id'";
                                    $run = mysqli_query($con,$selct_production);
                                    if($run){
                                    while($res = mysqli_fetch_array($run)){ 
                                        echo $res['sum'];
                                        } } 
                                    ?>
                                    Pcs</h5>
                               </div>

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
                            WHERE date  BETWEEN '$to_date' AND '$current_date' AND tbl_category.cat_id ='$cate_id'"; 
                               $run = mysqli_query($con,$selct_production);
                               if($run){
                                  $count ="1";
                               while($res = mysqli_fetch_array($run)){ ?>
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
                    <div class="d-flex justify-content-center">
                    <button class="btn btn-success" id="print">Print</button>
                </div>
                    <?php }  ?>
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