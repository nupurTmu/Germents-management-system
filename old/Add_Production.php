<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
               Add Production
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8  col-lg-8 border py-2">
                        <h5>Total Worker (<?php
                            $sele = "SELECT * FROM `tbl_worker` Where supervisor_id='$supervisor_id'";
                            $run = mysqli_query($con,$sele);
                            echo $chak = mysqli_num_rows($run);
                           ?>)</h5>
                        <hr>
                    <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border" >
                   
                    <thead>
                           <th style="width: 3%;">Sl</th>
                             <th style="width: 20%;">Worker Name</th>
                             <th style="width: 15%;">Worker ID</th>
                             <th style="width: 15%;">Action</th>
                        </thead>
                      
                        <tbody>
                        
                            <?php
                            $count = 1;
                             $sele = "SELECT * FROM `tbl_worker` Where supervisor_id='$supervisor_id'";
                             $run = mysqli_query($con,$sele);
                             while($resutl =  mysqli_fetch_array($run)){  ?>
                                <tr>
                                  <form action="" method="post"> 
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo  $resutl['worker_name'];?></td>
                                        <td><?php echo  $resutl['id'];?></td>
                                        <input type="hidden" name="worker_id" value="<?php echo  $resutl['id'];?>" > 
                                        <td><input type="submit" class="btn btn-outline-primary"  value="Add Production" name="add_productin"></td>
                                    </form>
                               </tr>
                              
                          <?php   }   ?>
                      
                        </tbody>
                  
                    </table>
             </div>
               <?php 
                  if(isset($_POST['save_produc'])){
                    $production_id;
                    $manager_id ;
                    $supervisor_id;
                    $category_id = $_POST['category_id'];
                    $pro_quantity = $_POST['pro_quantity'];
                    $worker_id = $_POST['worker_id'];

                    $insert = "INSERT INTO tbl_production(production_id,qty,supervisor_id,workere_id,category_id,manager_id)
                     Values('$production_id','$pro_quantity','$supervisor_id','$worker_id','$category_id','$manager_id')";
 
                    $run = mysqli_query($con,$insert);
                    if($run){
                        echo"<script>alert('Production Success')</script>";
                    }else{
                        echo"Production not Success";
                    }
                    
                  }
               
               ?>

             <?php 
                if(isset($_POST['add_productin'])){ 
                    $worker_id = $_POST['worker_id'];
                    ?>
                  
                    <div class="col-md-4 col-lg-4">
                        <div class="card ">
                            <div class="card-header bg-dark text-light py-2">
                               Select Category & Quantity
                            </div>
                            <div class="card-body py-5">
                            <div class="row">
                          <div class="col-lg-8">
                            <div class="category">
                            <form action="" method="post">
                            <label for="">Select Category</label>
                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                            <?php 
                                                $selet = "SELECT * FROM `tbl_category`";
                                                $run = mysqli_query($con,$selet);
                                                while($resutl =  mysqli_fetch_array($run)){  ?>
                                                <option value="<?php echo $resutl['cat_id']?>"><?php echo $resutl['category_name']?></option>
                                            <?php } ?>
                                    </select>
                            </div>
                          </div>
                                <div class="col-lg-4">
                                    <div class="">
                                        <label for="">Quantity</label>
                                        <input type="number" name="pro_quantity" class="form-control">
                                        <input type="hidden" name="worker_id" value="<?php echo  $worker_id;?>" >
                                    </div>
                                </div>
                                </div>
                                <div class="button mt-5 d-flex justify-content-end">
                                    <button class="btn btn-outline-success" name="save_produc">Save</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
              
              <?php 
                }
                ?>

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
    