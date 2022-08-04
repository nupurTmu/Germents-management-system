<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
             Worker Details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 py-2">
                      <div class="row">
                          <div class="col-lg-6"><h4>Worker Name :  <?php
                            $get_id = $_GET['id'];
                            $count = 1;
                             $sele = "SELECT * FROM `tbl_worker` Where id ='$get_id'";
                             $run = mysqli_query($con,$sele);
                             while($resutl =  mysqli_fetch_array($run)){  

                                echo $resutl['worker_name'];

                             }?>
                             </h4>   <h5>Total Production (
                         <?php
                             $sele = "select SUM(qty) AS sum from tbl_production where workere_id='$get_id'";
                             $run = mysqli_query($con,$sele);
                             while($res = mysqli_fetch_array($run)){ 
                                echo $res['sum'] ." pcs";
                             } 
                           ?>    )</h5></div>
                           
                          <div class="col-lg-6 d-flex">
                       
                              <div class="col-lg-4">
                              <form action="" method="POST">
                                  <label for="">Current Date</label>
                                  <input type="date" name="curent_date" class="form-control" >
                              </div>
                              <div class="col-lg-4">
                                  <label for="">Terget Date</label>
                                  <input type="date" name="terget_date" class="form-control" >
                              </div>
                              <div class="col-lg-4">
                                  <label for=""></label>
                                  <br>
                                  <input type="submit"  class="btn btn-primary ml-1" value="Search" >
                              </div>
                         
                          </div>
                          </form>
                      </div>
                        <hr>
                    <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border" >
                        <thead>
                           <th style="width: 3%;">Sl</th>
                             <th style="width: 20%;">Category Name</th>
                             <th style="width: 15%;">Quantity</th>
                             <th style="width: 15%;">Date</th>
                        </thead>
                        <tbody>
                        <?php
                           $cion= 1;
                             $sele = "select  * from tbl_production
                                   INNER JOIN tbl_category ON tbl_production.category_id = tbl_category.cat_id
                                   where workere_id='$get_id'";
                             $run = mysqli_query($con,$sele);
                             while($res = mysqli_fetch_array($run)){  ?>
                            <tr>
                                <td><?php echo $cion;?></td>
                                <td><?php echo $res['category_name']; ?>  </td>
                                <td><?php echo $res['qty']?></td>
                                <td><?php echo $res['date']?></td>
                            </tr>
                         <?php  }  ?> 
                        </tbody>
                    </table>
                 </div>
              
                </div>
            </div>
        </div>
           
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 <script>
$(document).ready( function () {
    $('#myTable3').DataTable();
} );
 </script>
<?php 
 require_once('footer.php');
?>
    