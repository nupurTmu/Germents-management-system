<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              Total Production
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 py-2">
                      <div class="row">
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
                        <h4>Total Production(
                        <?php
                           $cion= 1;
                            $sele = "select SUM(qty) AS sum from tbl_production
                                INNER JOIN tbl_supervisor on tbl_production.supervisor_id = tbl_supervisor.id
                                WHERE tbl_supervisor.id = '$supervisor_id'";
                             $run = mysqli_query($con,$sele);
                             while($res = mysqli_fetch_array($run)){ ?>
                                <tr>
                                  <td><?php  echo $res['sum'] ." pcs";?></td>
                                </tr>
                                <?php  }  ?> 
                          )</h4>
                    <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border" >
                        <thead>
                           <th style="width: 3%;">Sl</th>
                             <th style="width: 20%;"> Name</th>
                             <th style="width: 15%;">Quantity</th>
                             <th style="width: 15%;">Date</th>
                        </thead>
                        <tbody>
                        <?php
                           $cion= 1;
                             $sele = "select  * from tbl_production
                                   INNER JOIN tbl_category ON tbl_production.category_id = tbl_category.cat_id
                                   INNER JOIN tbl_supervisor on tbl_production.supervisor_id = tbl_supervisor.id
                                   WHERE tbl_supervisor.id = '$supervisor_id';
                                   ";
                             $run = mysqli_query($con,$sele);
                             while($res = mysqli_fetch_array($run)){  ?>
                            <tr>
                                <td><?php echo $cion++;?></td>
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
    